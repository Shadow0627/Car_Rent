

    var b = document.querySelector("#showb");
    var bc = document.querySelector("#car");
    var a  = document.querySelector("#showa");
    var ab = document.querySelector("#logon");

    if($(a).on('click'))
    {
        $(function()
    {
        $(a).on('click' ,function(){
        $(ab).toggleClass('active');
        });
    });
    };
    if($(b).on('click'))
    {
        $(function()
    {
        $(b).on('click' ,function(){
        $(bc).toggleClass('active');
        });
    });
    };