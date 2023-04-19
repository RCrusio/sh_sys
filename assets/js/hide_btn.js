var add_btn = document.getElementById('add');

var input_data = document.getElementById('data');   

if(input_data.value === ""){
    add_btn.hidden ='false'
}

else{
    add_btn.hidden ='true'
}