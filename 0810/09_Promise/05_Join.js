function happy(data, timeCount) {
    return new Promise(function (resolve, reject) {
        setTimeout(function () {
            console.log("happy");
            resolve(data);
        }, timeCount)
    })
}

function sad(data, timeCount) {
    return new Promise(function (resolve, reject) {
        setTimeout(function () {
            console.log("sad");
            resolve(data);
        }, timeCount)
    })
}


async function living() {
    var promise1 = happy(200, 10000);
    
    var promise2 = sad(-100, 5000);
    
    console.log("living1");
    
    var result1 = await promise1; //須等到抓到值之後才會進行下一步
    console.log("living2");
    
    var result2 = await promise2;
    console.log("result1:", result1);
    console.log("result2:", result2);
    var total = result1 + result2;


    console.log("total:", total);
}

living();

