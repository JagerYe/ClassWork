function longTimeWork(workFine = true, errorMessage = "test") {
    return new Promise( (resolve, reject) => {
        setTimeout( () => {
            (workFine) ? resolve("jjjjjj") : reject(errorMessage);
        }, 1000);
    })
}

function usingLongTimeWork() {
    longTimeWork(true, "err")  // try true/false
    .then(function (e) {
        console.log("T");
        console.log(e);
    })
    .catch(function (e) {
        console.log("F");
        console.log(e);
    })
}

usingLongTimeWork();
