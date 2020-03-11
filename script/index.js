
    var a  = document.querySelector("#showa");
    var b = document.querySelector("#showb");
    var c = document.querySelector('#showc');
    var d = document.querySelector('#showd');
    var e = document.querySelector('#showe');
    var ab = document.querySelector("#logon");
    var bc = document.querySelector("#car");
    var cd = document.querySelector('#con');
    var de = document.querySelector('#localization');
    var ef = document.querySelector('#register');

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
    if($(c).on('click'))
    {
        $(function()
    {
        $(c).on('click' ,function(){
        $(cd).toggleClass('active');
        });
    });
    };
    if($(d).on('click'))
    {
        $(function()
    {
        $(d).on('click' ,function(){
        $(de).toggleClass('active');
        });
    });
    };
    if($(e).on('click'))
    {
        $(function()
    {
        $(e).on('click' ,function(){
        $(ef).toggleClass('active');
        });
    });
    };

function valid(){
    if (document.getElementById('reg-pass').value == document.getElementById('reg-pass-again').value)
)
    {
        document.getElementById('reg-button').style.visibility = 'hidden';
    }
    else
    {
        document.getElementById('reg-button').style.visibility = 'visible';

    }
}