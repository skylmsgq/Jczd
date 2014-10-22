$(function() {
    var time = new Date().toLocaleString() + ' 星期' + '日一二三四五六'.charAt(new Date().getDay());
    $('.currentTime').text(time);
    setInterval(function() {
        time = new Date().toLocaleString() + ' 星期' + '日一二三四五六'.charAt(new Date().getDay());
        $('.currentTime').text(time);
    }, 1000);
});
