var shirtType = 'Anvil';

$(function() {
    get_keywords();
    keyword_functions();
    //add_to_list();

    (function() {
        'use strict';

        window.addEventListener('load', function()
        {
            var form = document.getElementById('needs-validation');
            form.addEventListener('submit', function(event)
            {
                event.preventDefault();
                event.stopPropagation();

                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
                add_to_list();
            }, false);
        }, false);
    })();

    $('.custom-file-input').on('change',function(){
        var fileName = $(this).val();
        $(this).next('.form-control-file').addClass("selected").html(fileName);
    })

});

function get_keywords() {
    $("form#getKeywords").submit(function(event)
    {
        event.preventDefault();
        event.stopPropagation();

        var keyword = $("#keyword").val();

        if(keyword.length > 0)
        {
            var submit_btn = $(this).find('button');

            submit_btn.attr('disabled', 'disabled');
            submit_btn.find("i").show();

            //clean keywordlist
            $("#keyword-results").html('');

            //wordhippo
            $.ajax({
                url: "php/wordhippo.php?keyword="+keyword,
                dataType: "json",
                cache: false
            }).done(function( data )
            {
                $.each(data, function (index, value) {
                    $(add_element(value.word)).appendTo("#keyword-results").after("\n");
                });

                submit_btn.find("i").hide();
                submit_btn.removeAttr('disabled');
            });
        }
    });
}

function keyword_functions() {
    //add keyword to keywordlist
    $('#keyword-results').on('click', 'button', function (){
        $(this).clone().appendTo("#keywordlist").after("\n");
        $(this).remove();
    });
}

function add_to_list() {
    $(".btn#add-to-list").click(function() {
        event.preventDefault();
        event.stopPropagation();

        var data_apparel_type = $('input[type=]:checked').val(); //anvil, premium, longsleeve, sweatshirt, hoodie
        var data_brand = $("#brand").val();
        var data_title = '"'+$("#title").val()+'"';
        var data_bullet1 = '"'+$("#bullet1").val()+'"';
        var data_bullet2 = '"'+$("#bullet2").val()+'"';

        var data_color = '';

        if(data_apparel_type == 'Long-Sleeve' || data_apparel_type == 'Sweatshirt' || data_apparel_type == 'Hoodie')
            data_colors = '"'+$.map($('#colorpicker-longsleeve :checkbox[name=form\\[color\\]\\[\\]]:checked'), function(n, i){return n.value;}).join(',')+'"';
        else
            data_colors = '"'+$.map($('#colorpicker :checkbox[name=form\\[color\\]\\[\\]]:checked'), function(n, i){return n.value;}).join(',')+'"';

        var data_sizes = '"'+$.map($(':checkbox[name=size\\[\\]]:checked'), function(n, i){return n.value;}).join(',')+'"';
        var data_price = $("#price").val();
        var data_filename = $("#filename").val();
        var data_description = '"'+$("#description").text()+'"';

        var listing_data =
            data_apparel_type + ',' +
            data_brand + ',' +
            data_title + ',' +
            data_bullet1 + ',' +
            data_bullet2 + ',' +
            data_colors + ',' +
            data_sizes + ',' +
            data_price + ',' +
            data_filename + ',' +
            data_description;

        console.log(listing_data);

        if(data_colors.length < 3)
            alert("Please pick at least one color, up to five");
        else if(data_sizes.length < 3)
            alert("Please select at least one size (Men, Women or Youth)");
        else
            $("#listings").append('<li class="list-group-item">'+listing_data+'</li>');
    });
}

function add_element(keyword) {
    return '<button type="button" class="btn btn-secondary">'+keyword+'</button>';
}

//displays and modifies the current number of characters in each field
$('.listing-field').keyup(function()
{
    var active_element = $(this);
    var text_max = $(active_element).attr('maxChars');
    var text_length = active_element.val().length;
    var text_remaining = text_max - text_length;

    var small = active_element.next("small.allowed-chars");
    if(small.length == 0)
        var small = active_element.parent().next("small.allowed-chars");

    small.html(text_remaining + ' of '+text_max+' characters left');

    if(text_remaining < 0) {
        small.addClass("text-danger");
        small.removeClass("text-muted");
    }
    else {
        small.addClass("text-muted");
        small.removeClass("text-danger");
    }
});

//update "check brand" link after change
$('.listing-field#brand').keyup(function() {
    $("small#check-brand-link").show();
    $("small#check-brand-link > a").attr("href", "https://www.amazon.com/s/ref=w_bl_sl_s_ap_web_7141123011?ie=UTF8&node=7141123011&field-brandtextbin="+$(this).val());
});

$("#colorpicker input[type=checkbox].color-check").click(function() {
    console.log($("#colorpicker input[type=checkbox].color-check:checked").length)

    var bol = $("#colorpicker input[type=checkbox].color-check:checked").length >= 5;
    $("#colorpicker input[type=checkbox].color-check").not(":checked").attr("disabled",bol);
});

$("#colorpicker-longsleeve input[type=checkbox].color-check").click(function() {
    console.log($("#colorpicker-longsleeve input[type=checkbox].color-check:checked").length)

    var bol = $("#colorpicker-longsleeve input[type=checkbox].color-check:checked").length >= 5;
    $("#colorpicker-longsleeve input[type=checkbox].color-check").not(":checked").attr("disabled",bol);
});


$("label.custom-control.custom-checkbox").mouseover(function() {
    var colorclass = $(this).children("input").attr('id');
    console.log(colorclass);
    $("#tshirt-placeholder").removeClass();

    var apparel_type = $('input[type=radio]:checked').val();
    $("#tshirt-placeholder").addClass(apparel_type + " " + colorclass);
});

$(".btn#title-load").click(function() {
    $("#title").val(title_placeholders[Math.floor(Math.random()*title_placeholders.length)]);
});

$(".btn#bullet1-load").click(function() {
    $("#bullet1").text(bullet_placeholders[Math.floor(Math.random()*bullet_placeholders.length)]);
});

$(".btn#bullet2-load").click(function() {
    $("#bullet2").text(bullet_placeholders[Math.floor(Math.random()*bullet_placeholders.length)]);
});
$( document ).ready(function() {
    if ($('input[type=radio]:checked').attr('id') == 'form_type_0') {
        $("#tshirt-placeholder").removeClass().addClass('Anvil');
        $("#colorpicker-longsleeve").hide();
        $("#colorpicker").show();
        shirtType = 'Anvil';
    }
    else if ($('input[type=radio]:checked').attr('id') == 'form_type_1') {
        $("#tshirt-placeholder").removeClass().addClass('Premium');
        $("#colorpicker-longsleeve").hide();
        $("#colorpicker").show();
        shirtType = 'Premium';
    }
    else if ($('input[type=radio]:checked').attr('id') == 'form_type_2') {
        $("#tshirt-placeholder").removeClass().addClass('Long-Sleeve');
        $("#colorpicker-longsleeve").show();
        $("#colorpicker").hide();
        shirtType = 'Long-Sleeve';
    }
    else if ($('input[type=radio]:checked').attr('id') == 'form_type_3') {
        $("#tshirt-placeholder").removeClass().addClass('Sweatshirt');
        $("#colorpicker-longsleeve").show();
        $("#colorpicker").hide();
        shirtType = 'Sweatshirt';
    }
    else if ($('input[type=radio]:checked').attr('id') == 'form_type_4') {
        $("#tshirt-placeholder").removeClass().addClass('Hoodie');
        $("#colorpicker-longsleeve").show();
        $("#colorpicker").hide();
        shirtType = 'Hoodie';
    }
});

$('input[type=radio]').change(function() {
    if (this.id == 'form_type_0') {
        $("#tshirt-placeholder").removeClass().addClass('Anvil');
        $("#colorpicker-longsleeve").hide();
        $("#colorpicker").show();
        shirtType = 'Anvil';
    }
    else if (this.id == 'form_type_1') {
        $("#tshirt-placeholder").removeClass().addClass('Premium');
        $("#colorpicker-longsleeve").hide();
        $("#colorpicker").show();
        shirtType = 'Premium';
    }
    else if (this.id == 'form_type_2') {
        $("#tshirt-placeholder").removeClass().addClass('Long-Sleeve');
        $("#colorpicker-longsleeve").show();
        $("#colorpicker").hide();
        shirtType = 'Long-Sleeve';
    }
    else if (this.id == 'form_type_3') {
        $("#tshirt-placeholder").removeClass().addClass('Sweatshirt');
        $("#colorpicker-longsleeve").show();
        $("#colorpicker").hide();
        shirtType = 'Sweatshirt';
    }
    else if (this.id == 'form_type_4') {
        $("#tshirt-placeholder").removeClass().addClass('Hoodie');
        $("#colorpicker-longsleeve").show();
        $("#colorpicker").hide();
        shirtType = 'Hoodie';
    }
});

var title_placeholders =  [
    '% T-Shirt % Tee',
    '% T-Shirt - % Tee',
    '% T-Shirt | % Tee Gift',
    '% T-Shirt - % Shirt'
];

var bullet_placeholders = [
    'This KEYWORD Tee is for anyone who KEYWORD. A KEYWORD Teeshirt is the perfect ',
    'This T Shirt is a great fit for KEYWORD. Gift it someone who KEYWORD on their Birthday or Christmas.'
];