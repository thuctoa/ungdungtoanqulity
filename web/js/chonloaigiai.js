MathJax.Hub.Config({
    tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
});
function chonloaigiai(loai){
    
    huongdan(loai,'lythuyet');
    huongdan(loai,'thuattoan');
    MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
}
function huongdan(loai, hinhthuc){
    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            var daura= xmlhttp.responseText;
            if(daura){//Cắt ra một đoạn từ cụm từ daura đến footer 
                var start = daura.indexOf(hinhthuc);
                var end = daura.indexOf('footer');
                document.getElementById(hinhthuc).innerHTML
                = daura.substring(start+12,end-1);
            }else{
                document.getElementById(hinhthuc).innerHTML='loi roi';
            }
        }
        if(xmlhttp.status==500){
            alert('Lỗi máy chủ không thực thi được.');
        }
    }
    xmlhttp.open("GET","/noidung/"+ hinhthuc +"?loai="
            +loai, false);
    xmlhttp.send();
}
