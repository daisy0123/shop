$(function() {
    $("form.registerform :input").blur(function() {
        var $parent = $(this).parent();
        $parent.find('.formtips').remove();
        if ($(this).is('#phonenumber')) {
            if (this.value == "" || this.value.length < 11) {
                var errorMsg = '请输入有效的 11位数字！';
                $parent.append('<span class="formtips onError">' + errorMsg + '</span>');
            } else {
                var okMsg = '输入正确！';
                $parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
            }
        }
        if ($(this).is('#username')) {
            if (this.value == "" || this.value.length < 3) {
                var errorMsg = '请输入正确的用户名(用户名要超过3位数)！';
                $parent.append('<span class="formtips onError">' + errorMsg + '</span>');
            } else {
                var okMsg = '输入正确！';
                $parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
            }
        }
        if ($(this).is('#email')) {
            if (this.value == "" || (this.value != "" && !/.+@.+\.[a-zA-Z]{2,4}$/.test(this.value))) {
                var errorMsg = '请输入正确的邮箱地址！';
                $parent.append('<span class="formtips onError">' + errorMsg + '</span>');
            } else {
                var okMsg = '输入正确！';
                $parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
            }
        }
        if ($(this).is('#password')) {
            if (this.value == "") {
                var errorMsg = '密码不能为空！';
                $parent.append('<span class="formtips onError">' + errorMsg + '</span>');
            } else {
                var okMsg = '输入正确！';
                $parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
            }
        }
        if ($(this).is('#confirm')) {
            var num = $('#password').val();
            if (this.value == num && this.value != "") {
                var okMsg = '密码正确！';
                $parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
            } else {
                var errorMsg = '两次输入密码不同！';
                $parent.append('<span class="formtips onError">' + errorMsg + '</span>');
            }
        }
        if ($(this).is('#address')) {
            if (this.value == "") {
                var errorMsg = '地址不能为空！';
                $parent.append('<span class="formtips onError">' + errorMsg + '</span>');
            } else {
                var okMsg = '输入正确！';
                $parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
            }
        }

    }).keyup(function() {
        $(this).triggerHandler('blur');
    }).focus(function() {
        $(this).triggerHandler('blur');
    });
    $(".salerRegister").click(function() {
        $("form.registerform :input").trigger('blur');
        var numError = $('form.registerform .onError').length;

        if (numError) {
            alert('你没有填写完信息！');
            return false;
        }

    });
    $(".userRegister").click(function() {
        $("form.registerform :input").trigger('blur');
        var numError = $('form.registerform .onError').length;

        if (numError) {
            alert('你没有填写完信息！');
            return false;
        }

    });
    /*
     商品详情页商品数量增减按钮
     * */
    $('.btn_num').click(function() {
        var count = $('.count_num').val();
        if ($(this).is('#num_less')) {
            if (count >= 1) {
                count--;
            }
        }
        if ($(this).is('#num_more')) {
            count++;
        }
        $price = $('.hgoodsprice').val();
        $total = $price * count;
        $('.count_num').val(count);
        $('.hgoodscount').val(count);
        $('.hgoodstotal').val($total);
    });

    /*
     商品详情下面的转换
     * */
    $(".items-section-title>span").click(function() {
        $classId = $(this).attr('id');
        $sectionShow = $classId + "-page";
        $activeClass = $("." + $sectionShow);
        $activeClass.siblings().hide();
        $(this).siblings().removeClass("items-section-active");
        $(this).addClass("items-section-active");
        $activeClass.show();
    });
    /*
     个人中心
     * */
    $(".menber-message-slider>ul>li>span").click(function() {
        $className = $(this).attr('class');
        $sectionShow = $className + "_page";
        $activeClass = $("." + $sectionShow);
        $activeClass.siblings().hide();
        $(this).parent("li").siblings().removeClass("menber_active");
        $(this).parent("li").addClass("menber_active");
        $activeClass.show();
    });
    /*
     购物车选择
     * */
    $("[class=check]:checkbox").click(function() {
        var flag = true;
        var ogmoney = 0;
        var ocount = 0;
        $('[class=check]:checkbox').each(function() {
            if (!this.checked) {
                flag = false;
            } else {
                var oprice = $(this).parent().siblings('.tmoney').children('b').text();
                if (this.checked) {
                    ogmoney = ogmoney + Number(oprice);
                    ocount++;
                }
            }
        });
        $(".mtotal").val(ogmoney);
        $(".gcounts").children('b').text(ocount);
        $(".allcheck").prop('checked', flag);
    });
    $(".allcheck").click(function() {
        var omoney = 0;
        var count = 0;
        if (this.checked) {
            $('[class=check]:checkbox').prop('checked', true);
            $('[class=check]:checkbox').each(function() {
                var ogprice = $(this).parent().siblings('.tmoney').children('b').text();
                omoney = omoney + Number(ogprice);
                count++;
            });
        } else {
            $('[class=check]:checkbox').prop('checked', false);
        }
        $(".mtotal").val(omoney);
        $(".gcounts").children('b').text(count);
    });
    /*
     * 修改密码
     */
    $("form.passwordForm :input").blur(function() {
        var $parent = $(this).parent();
        $parent.find('.formtips').remove();
        if ($(this).is('#oldpass')) {
            if (this.value == "") {
                var errorMsg = '密码不能为空！';
                $parent.append('<span class="formtips onError">' + errorMsg + '</span>');
            } else {
                var okMsg = '输入正确！';
                $parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
            }
        }
        if ($(this).is('#newpass')) {
            var oldnum = $('#oldpass').val();
            if (this.value == "") {
                var errorMsg = '密码不能为空！';
                $parent.append('<span class="formtips onError">' + errorMsg + '</span>');
            } else if (this.value == oldnum && this.value != "") {
                var errorMsg = '新密码不能和旧密码相同！';
                $parent.append('<span class="formtips onError">' + errorMsg + '</span>');
            } else {
                var okMsg = '输入正确！';
                $parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
            }
        }
        if ($(this).is('#conpass')) {
            var num = $('#newpass').val();
            if (this.value == num && this.value != "") {
                var okMsg = '密码正确！';
                $parent.append('<span class="formtips onSuccess">' + okMsg + '</span>');
            } else {
                var errorMsg = '两次输入密码不同！';
                $parent.append('<span class="formtips onError">' + errorMsg + '</span>');
            }
        }
    }).keyup(function() {
        $(this).triggerHandler('blur');
    }).focus(function() {
        $(this).triggerHandler('blur');
    });
    $(".passwordSubmit").click(function() {
        $("form.passwordForm :input").trigger('blur');
        var numError = $('form.passwordForm .onError').length;
        if (numError) {
            alert('你没有填写完信息！');
            return false;
        }
    });
    /*
     * 购买支付页面
     */
    $moneytotal = $('.moneytotal').val();
    $moneysend = $('.moneysend').val();
    $money = Number($moneytotal) + Number($moneysend);
    $('.money').val($money);

    /*
     * 支付
     */
    $totalmoney = 0;
    $moneysend = 0;
    $('.goodtotal').each(function() {
        $totalmoney = Number($totalmoney) + Number(this.innerHTML);
    });
    $('.goodsend').each(function() {
        $moneysend = Number($moneysend) + Number(this.innerHTML);
    });

    $moneyrepay = Number($totalmoney) + Number($moneysend)
    $('.moneytotal').val($totalmoney);
    $('.moneysend').val($moneysend);
    $('.money').val($moneyrepay);
    
    /*
     * 管理员
     */
     $(".admin-select button").click(function() {
        $className = $(this).attr('id');
        $sectionShow = $className + "-page";
        $activeClass = $("." + $sectionShow);
        $activeClass.siblings().hide();
        $activeClass.show();
    });

});
