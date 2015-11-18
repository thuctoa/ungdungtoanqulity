MathJax.Hub.Config({
    tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
});
function chonloaigiai(loai){
    document.getElementById('khoi_tao').style.display="block";
    document.getElementById('nut_giai').style.display="none";
    huongdan(loai,'dauvao');
    huongdan(loai,'lythuyet');
    huongdan(loai,'thuattoan');
    MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
}
function giai_matran(){
    var m = document.getElementById('m').value;
    var n = document.getElementById('n').value;
    var loai = document.getElementById('loai').value;
    console.log('m = '+ m + '; n = '+ n + '; loai = '+loai);
    if(m>0&&n>0){
        document.getElementById('khoi_tao').style.display="none";
        document.getElementById('nut_giai').style.display="block";
    }
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
                = daura.substring(start+hinhthuc.length + 2 ,end-1);
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
function borderbottom(khung){
    var elmnt = document.getElementById(khung);
    if(elmnt.scrollTop>0){
        elmnt.style.borderTop="1px solid #ddd";
       
    }else{
        elmnt.style.borderTop="none";
    }
    if(elmnt.scrollTop < elmnt.scrollHeight - elmnt.clientHeight - 1 ){
        elmnt.style.borderBottom="1px solid #ddd";
    }else{
        elmnt.style.borderBottom="none";
    }
}