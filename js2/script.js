function changeBg(){
    var letters='0123456789ABCDEF';
    var color='#';
    for(var i=0;i<6;i++)
    {
        color+=letters[Math.floor(Math.random()*16)];
    }
    document.getElementsByTagName('body')[0].style.backgroundColor=color;
}