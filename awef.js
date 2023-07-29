
const QUESTION_TYPES = {
    MSQ: 'MSQ',
    MCQ: 'MCQ',
    BLANK: 'BLANK',
    OPEN: 'OPEN',
};
function waitForElement(selector) {
    return new Promise((resolve) => {
        if (document.querySelector(selector)) {
            return resolve(document.querySelector(selector));
        }
        const observer = new MutationObserver((mutations) => {
            if (document.querySelector(selector)) {
                resolve(document.querySelector(selector));
                observer.disconnect();
            }
        });

        observer.observe(document.body, {
            childList: true,
            subtree: true,
        });
    });
}
function highlightAnswer(el) {
    el.querySelector('.bpl-container').click();
}
setInterval(() => {
    document.querySelector('.right-navigator').click();

    document.querySelector('.right-navigator-wrapper').click();
}, 100);
setInterval(() => {
    let skills = document.querySelector('.powerup-belt').children;
    for (const skill of skills) {
        console.log(skill);
        skill.querySelector('.powerup-title').click();
    }
}, 1000);
async function fetchAnswers( url) {
    const { data } = await fetch(
        url
    ).then((res) => res.json());

    return data.answers;
}
function getGameData() {
    const rootdiv = document.querySelector('#root');
    if (!rootdiv) {
        console.error("Can't find root container");
        return;
    }

   const root = document.querySelector('#root')['__vue_app__'];
const {
    user: {
        profile: { mongoId },
    },
    game: {
        data,
        questions: { currentId },
    },
} = app.config.globalProperties.$store.state;

    return {
        currentId,
        mongoId,
        data,
    };
}
function searchAnswer(answers) {
    const { currentId } = getGameData();

    const answer = answers.find((answer) => answer._id === currentId);
    if (!answer) {
        console.error("Can't find answer to this question");
        return;
    }

    if (answer.type === QUESTION_TYPES.BLANK) {
        const input = document.querySelector('.typed-option-input');
        if (!input) {
            console.error('Answer input not found');
            return;
        }

        if (answer.answers.length === 0) {
            console.error('No answers found');
            return;
        }
        const [{ text }] = answer.answers;

        input.value = text;
        input.dispatchEvent(new Event('input'));
        return;
    }

    if (answer.type === QUESTION_TYPES.OPEN) {
        const input = document.querySelector('.typed-option-input');
        if (!input) {
            console.error('Answer input not found');
            return;
        }

        input.placeholder = 'No answer available for this question';
        return;
    }

    if (
        answer.type === QUESTION_TYPES.MSQ ||
        answer.type === QUESTION_TYPES.MCQ
    ) {
        const options = document.querySelector('.options-grid').children;
        if (!options) {
            console.error("Can't find any options");
            return;
        }
        for (const option of options) {
            let optionContent = option.querySelector(
                '.textContainer > div'
            )?.innerHTML;

            if (!optionContent) {
                const image = option.querySelector('.option-image');
                if (image) {
                    let url = getComputedStyle(image).backgroundImage.slice(5, -2);
                    url = url.slice(0, url.indexOf('?'));

                    if (answer.answers.some((answer) => answer.image === url)) {
                        highlightAnswer(option);
                    }
                    continue;
                }

                console.error("Can't find option content");
                continue;
            }

            if (optionContent.includes('katex')) {
                if (
                    answer.answers[0].text.slice(17, -20) ===
                    /x-tex">(.*)<\/annotation>/i.exec(optionContent)[1]
                ) {
                    highlightAnswer(option);
                }
            }

            if (
                answer.answers.some(
                    (answer) =>
                        answer.text.replace(/(<([^>]+)>)/gi, '') ===
                        optionContent.replace(/(<([^>]+)>)/gi, '')
                )
            ) {
                highlightAnswer(option);
            }
        }
        return;
    }

    console.error('Invalid question type ' + answer.type);
}
async function bootstrap() {
   

    console.info('Script initialized');

   

    const answers = await fetchAnswers('https://api.quizit.online/quizizz/answers?pin=https://quizizz.com/join/quiz/64528693f8e6ed001ee0f59f/start');

    const interval = setInterval(async () => {
        if (document.querySelector('.screen-summary')) {
            console.info('Quiz has finished and script has been deactivated');
            clearInterval(interval);
            return;
        }
        await waitForElement('.options-container');

        searchAnswer(answers);
    }, 200);
    console.log(answers)
}
bootstrap()