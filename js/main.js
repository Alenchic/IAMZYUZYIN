$(document).ready(function () {

    $(document).on('click','.orderProductButton',function (event) {
        $.ajax({
            url: 'php/addToBasket.php',
            type: 'post',
            data: {id:$(this).attr('id')}
        })
        event.preventDefault();
    })

    function costProsucts() {
        cost = new Array();
        col = new Array();
        summ = 0;
        $('.cost').each(function (i) {
          cost[i] =(+$(this).text());
        })

        $('.col').each(function (i) {
            col[i] =(+$(this).val());
        })

        for (i=0;i<cost.length;i++){
            summ += cost[i]*col[i];
        }
        return summ;

    }

    $('.all_cost span').html(costProsucts());

    $(document).on('keyup','.col',function () {
        $('.all_cost span').html(costProsucts());
    })
    $(document).on('click','.col',function () {
        $('.all_cost span').html(costProsucts());
    })

})