var arr = {nama:"ilham syaifullah",age:19,address:"jl.sriwijaya raya no.67",hobbies:{"bboy","coding","editing"},is_married:null,list_school:{[name:"SDN MEKARJAYA 25",year_in:2006,year_out:2012,major:null],[name:"SMP BUDI BHAKTI DEPOK",year_in:2012,year_out:2015,major:null],[name:"STM BUDI UTOMO DEPOK",year_in:2015,year_out:2018,major:"TAV"]},skills:{[skill_name:"PHP",level:"advanced"],[skill_name:"CSS",level:"beginner"],[skill_name:"JavaScript",lavel:"advanved"]},interest_in_coding:"YES"}; 
var MyJSON = JSON.stringify(arr);
document.getElementById("demo").innerHTML = MyJSON;