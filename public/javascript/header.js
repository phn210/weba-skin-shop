document.getElementsByClassName('btn')[0].addEventListener('click', function(){
    if(document.forms['search_form']['keyword'].value.length > 0) {
        document.getElementsByClassName('search_bar')[0].submit();
    }
})