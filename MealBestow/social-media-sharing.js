document.write('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">');

document.write('<style>\
    .share-buttons {\
        display: flex;\
        gap: 10px;\
        margin-top: 20px;\
    }\
    .share-buttons i {\
        cursor: pointer;\
        font-size: 24px;\
        color: #333;\
    }\
</style>');

document.write('\
<div class="share-buttons">\
    <!-- Twitter -->\
    <i class="fab fa-twitter" onclick="shareOnTwitter()"></i>\
    <!-- Facebook -->\
    <i class="fab fa-facebook" onclick="shareOnFacebook()"></i>\
</div>\
');

document.write('\
<script>\
    function shareOnTwitter() {\
        const recipeUrl = encodeURIComponent(window.location.href);\
        const tweetText = encodeURIComponent("Check out this delicious chicken biryani recipe!");\
        window.open(`https://twitter.com/intent/tweet?text=${tweetText}&url=${recipeUrl}`, "_blank");\
    }\
    function shareOnFacebook() {\
        const recipeUrl = encodeURIComponent(window.location.href);\
        window.open(`https://www.facebook.com/sharer/sharer.php?u=${recipeUrl}`, "_blank");\
    }\
    function shareOnInstagram() {\
        alert("Share this chicken biryani recipe on Instagram manually.");\
    }\
</script>\
');

document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>');