$.getJSON("json/test.json", function (result) {
    console.log(result);
    for (let i =0;i<result.length;i++) {
        console.log(result[i].localized_name);
    }
});


