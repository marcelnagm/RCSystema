function findUrls(text)
{
    var source = (text || '').toString();
    var urlArray = [];
    var url;
    var matchArray;
    var regexToken = /(((ftp|https?):\/\/)[\-\w@:%_\+.~#?,&\/\/=]+)|((mailto:)?[_.\w-]+@([\w][\w\-]+\.)+[a-zA-Z]{2,3})/g;

    while ((matchArray = regexToken.exec(source)) !== null)
    {
        var token = matchArray[0];
        urlArray.push(token);
    }

    return urlArray;
}
var lastParsedUrl = '';
var interval = false;
var semaphore = false;

function swithPhoto(move)
{
    var max = $('.image-wrapper').length - 1;
    var current = parseInt($('.image-wrapper:not(.hidden)').attr('rel'));
    var next = current + move;
    if (next === -1)
    {
        next = max;
    }
    else if (next > max)
    {
        next = 0;
    }

    $('#link_image').val($('.image-wrapper[rel="' + next + '"] img').attr('src'));
    $('.image-wrapper').addClass('hidden');
    $('.image-wrapper[rel="' + next + '"]').removeClass('hidden');


}

function attachFileReader(fileInput)
{
    if (window.FileReader) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $(fileInput).siblings('.preview').append($('<img></img>').attr('src', e.target.result)
                    .width(100));
            /*and now add one more*/
            var next = $('<div></div>').addClass('one-photo');
            var preview = $('<div></div>').addClass('preview');
            var input = $('<input></input>').attr('type', 'file').addClass('fileUpload').attr('name', 'photo_' + $('.fileUpload').length);
            var removeThisPicture = $('<div></div>').addClass('removePhoto').html('remove').click(function(e)
            {
                e.preventDefault();
                next.remove();
            });


            next.append(input);
            next.append(removeThisPicture);
            next.append(preview);


            $(fileInput).parent('.one-photo').after(next);

            input.change(function() {
                attachFileReader(this);
            });

        };

        reader.readAsDataURL($(fileInput)[0].files[0]);
    }
    else
    {
        
            var next = $('<div></div>').addClass('one-photo');
            var preview = $('<div></div>').addClass('preview');
            var input = $('<input></input>').attr('type', 'file').addClass('fileUpload').attr('name', 'photo_' + $('.fileUpload').length);
            input.change(function() {
                attachFileReader(this);
            });
            
            var removeThisPicture = $('<div></div>').addClass('removePhoto').html('remove').click(function(e)
            {
                e.preventDefault();
                next.remove();
            });


            next.append(input);
            next.append(removeThisPicture);
            next.append(preview);
            $(fileInput).parent('.one-photo').after(next);
        
    }
}

function attachWallEvents()
{

    $('.add-comment textarea,.add-comment input').focus(function()
    {
        clearInterval(interval);
    });

    $('.add-comment-link').click(function(e)
    {
        clearInterval(interval);
        e.preventDefault();
        $('.add-comment[rel="' + $(this).attr('rel') + '"]').fadeIn(500);
    });

    $('.add-comment input[type="file"]').change(function()
    {
        var textarea = $(this).siblings('textarea');
        $(textarea).off('keydown');
        $(textarea).keydown(function(e)
        {
            if (e.keyCode === 13)
            {
                /*submit dat form!*/
            }
        });
    });
    $('.fancybox').click(function(e)
    {
        e.preventDefaulf();
    });

    $('.fancybox').fancybox({
        'transitionIn': 'elastic',
        'transitionOut': 'elastic',
        'speedIn': 600,
        'speedOut': 200
    });

    $('.add-comment textarea').keydown(function(e)
    {
        var id = $(this).parent('form').attr('rel');

        if (e.keyCode === 13)
        {
            /*enter*/
            e.preventDefault();
            /*ajax*/

            $.ajax(
                    {type: 'post',
                        url: 'wall.php',
                        data: {add_comment: true, id: id, text: $(this).val()},
                        success: function(data)
                        {
                            /*reload the wall*/
                            $('.wallEntries').html(data);
                            attachWallEvents();
                        }
                    }
            );
        }
    });
}

var lastHtml = '';

function getWallAjax()
{
   
    semaphore = true;
    $.ajax(
            {type: 'post',
                url: 'wall.php',
                data: {ajax_get: true, limit: $('input[name="limit"]').val()},
                success: function(data)
                {
                    if (lastHtml === data)
                    {

                    }
                    else
                    {
                        $('.wallEntries').html(data);
                        lastHtml = data;
                        attachWallEvents();
                    }
                    $('.lazyLoader').html('');
                    semaphore = false;
                }
            }
    );
}



$(document).ready(function()
{

    $('.removePhoto').click(function()
    {
        $(this).parent('.one-photo').remove();
    });

    $('.picon').click(function(e)
    {
        e.preventDefault();
        $('#picture').fadeIn(500);
        //$('textarea.grybord').css('display','none');

        $('.postbutton').off('click');
        $('.postbutton').click(function(e)
        {
            $('#upload_photos').submit();
        });


    });

    $('.grybord').focus(function()
    {
        if ($(this).val() === 'Whats in your head?')
        {
            $(this).val('');
        }
    });

    $('#picture input[type="file"]').change(function()
    {
        attachFileReader(this);
    });

    /*$("#tabs").tabs();*/

    if (typeof $('.wallEntries')[0] !== 'undefined')
    {
        interval = setInterval(function()
        {
            getWallAjax();
        }, 17500);

    }
    getWallAjax();

    $('.postbutton').click(function(e)
    {
        e.preventDefault();

        $(this).after($('<div></div>').addClass('ajax-loader'));

        $.ajax({
            url: 'wall.php',
            type: 'post',
            data: {
                ajax_add: 'true',
                text: $('.grybord').val(),
                link: $('#link').val(),
                link_photo: $('#link_image').val(),
                link_title: $('input[id="link_title"]').val(),
                link_description: $('input[id="link_description"]').val()
            },
            success: function()
            {
                $('.ajax-loader').remove();
                $('#link').val('');
                $('#link_image').val('');
                $('input[id="link_title"]').val('');
                $('input[id="link_description"]').val('');
                $('textarea[name="status"]').val('');
                $('#link_info').html('');
                $('#link_info').css('display', 'none');
                lastParsedUrl = false;
            }
        });


    });

    /*analise status to getch http or https*/
    $('textarea.grybord').keyup(function()
    {
        /*get url*/

        var urls = findUrls($('textarea.grybord').val());
        if (urls.length > 0 && lastParsedUrl !== urls[0])
        {
            $.ajax({
                url: ajaxUrl,
                type: 'post',
                data: {
                    action: 'getUrlData',
                    url: urls[0]
                },
                beforeSend: function()
                {
                    lastParsedUrl = urls[0];
                    $('#link_info').html('');
                    $('#link_info').css('display', 'block');
                    $('#link_info').append($('<div></div>').addClass('ajax-loader'));
                },
                dataType: 'json',
                success: function(data)
                {
                    $('#link_info').css('display', 'block');
                    $('.ajax-loader').remove();
                    $('#link_info').html('');
                    /*now render the link*/
                    var title = $('<p class="scrapedTitle"></p>').html(data.title);
                    var description = $('<p></p>').html(data.description);
                    var photos = $('<div class="photo-browser"></div>');

                    var left = $('<div>&laquo</div>').addClass('left-arrow').click(function(e)
                    {
                        e.preventDefault();
                        swithPhoto(-1);
                    });
                    var right = $('<div>&raquo</div>').addClass('right-arrow').click(function(e)
                    {
                        e.preventDefault();
                        swithPhoto(1);
                    });

                    var terminator = $('<a></a>').addClass('terminator').html('Remove link info').click(function()
                    {
                        $('#link_info').html('');
                        $('#link_info').css('display', 'none');
                    });

                    $('#link_info').append(terminator);

                    $('#link_info').append(title);
                    $('#link_info').append(description);
                    $(photos).append(left);
                    $(photos).append(right);

                    var i;
                    for (i = 0; i < data.images.length; i++)
                    {
                        var imgWrapper = $('<div></div>').addClass('image-wrapper').attr('rel', i);
                        var img = $('<img></img>').attr('src', data.images[i]);
                        if (i > 0)
                        {
                            imgWrapper.addClass('hidden');
                        }
                        else
                        {
                            var link_image = $('<input></input>').attr('type', 'hidden').attr('id', 'link_image').val(data.images[i]);
                            $('#link_info').append(link_image);
                        }
                        $(imgWrapper).append(img);
                        $(photos).append(imgWrapper);
                    }

                    var link_title = $('<input></input>').attr('id', 'link_title').val(data.title).attr('type', 'hidden');
                    var link = $('<input></input>').attr('id', 'link').val(urls[0]).attr('type', 'hidden');
                    var link_description = $('<input></input>').attr('id', 'link_description').val(data.description).attr('type', 'hidden');
                    $('#link_info').append(link_title);
                    $('#link_info').append(link);
                    $('#link_info').append(link_description);

                    $('#link_info').append(photos);

                }
            });
        }

    });

    $(window).scroll(function(e) {
        var scroll = parseInt($(window).scrollTop());
        var height = parseInt($(window).height());
        var percent = scroll / height;


        if (percent > 0.8 && !semaphore)
        {
            semaphore = true;
            $('input[name="limit"]').val(parseInt($('input[name="limit"]').val()) + 10);
            $('.lazyLoader').append($('<div></div>').addClass('ajax-loader'));
        }
    });
});