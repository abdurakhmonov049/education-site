const body = document.querySelector('body'),
sidebar = body.querySelector('.sidebar'),
toggle = body.querySelector('.toggle'),
searchbtn = body.querySelector('.search-box'),
modeSwitch = body.querySelector('.toggle-switch'),
modeText = body.querySelector('.mode-text');
// user_id = document.querySelector('.user'),
// select = document.querySelector('.user.selected')


toggle.addEventListener('click',()=>{
    sidebar.classList.toggle('close');
})



modeSwitch.addEventListener('click',()=>{
    body.classList.toggle('dark');


    if(body.classList.contains('dark')){
        modeText.innerHTML = "Light Mode";
    }
    else{
        modeText.innerHTML = "Dark Mode";
    }
})

