
const fs = require('fs');

fs.readFile('../json/references.json','utf-8',(err,jsonString)=>{

    if(err)
    {
        console.log(err);
    }
    else{
        const data = JSON.parse(jsonString);
        console.log(data.address);
    }
})
