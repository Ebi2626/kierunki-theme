window.onload = function(){ // tak wiem wiem, mam teraz na zegarku 01:30, trochę wyrozumiałości
    var tmppadding=5;
    //console.log('footerA' + document.getElementById("footerA").clientHeight);
    //console.log('footerB' + document.getElementById("footerB").clientHeight);
    //if(document.getElementById("footerA").clientHeight=='') console.log('kurwa mac');
    while(document.getElementById('footerA').clientHeight>document.getElementById('footerB').clientHeight)
    {
        if((tmppadding - 1) > 0){
        //console.log('footerA' + document.getElementById("footerA").clientHeight);
        //console.log('footerB' + document.getElementById("footerB").clientHeight);
        var newpadding = tmppadding - 1;
        document.getElementById('footerA').style.padding=newpadding.toString()+"%";
        tmppadding = newpadding;
        }
        else break;
    }
}
