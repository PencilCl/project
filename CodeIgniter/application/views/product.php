<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <title>商品页面</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../css/product.css">
        <link href="../css/demo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/optstyle.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="/fonts/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/shopcar.js"></script>
       <script type="text/javascript"  src="../js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="../js/jquery.imagezoom.min.js"></script>
        <script type="text/javascript" src="../js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="../js/list.js"></script>

    </head>

    <body>


        <!--顶部导航条 -->

        <!--悬浮搜索框-->

                <!--分类-->
    <div class="row ">
                  <div class="col-sm-12 col-md-5 col-md-offset-4">
                        <div class="header_nav navbar ">
                    <li><a href=" " class="login">亲，请登录，免费注册 </a></li>
                    <div class="space"></div>
                    <li><a href="#">商城首页</a></li>
                    <li><i class="fa fa-shopping-cart"></i><a href="#"> 购物车</a></li>
                    <li><i class="fa fa-heart"></i><a href="#">  收藏夹</a></li>
                    <li><i class=" fa fa-user"></i><a href="#"> 个人中心</a></li>
                </div>
            </div>
        </div>
                <script type="text/javascript">
                    $(function() {});
                    $(window).load(function() {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            start: function(slider) {
                                $('body').removeClass('loading');
                            }
                        });
                    });
                </script>

            

                <div class="row">

                  <div class="col-sm-12 col-md-6 col-md-offset-3">

                    <div class="row">

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <img class="img-rounded" src="../images/02_mid.jpg" />
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                         <div class="tb-detail-hd">
                            <h1>
                             良品铺子 手剥松子218g 坚果炒货 巴西松子
                            </h1>
                         </div>
                        <div class="tb-detail-list">
                            <!--价格-->
                            <div class="tb-detail-price">
                                <li class="price iteminfo_price">
                                    <dt>促销价</dt>
                                    <dd><em>¥</em><b class="sys_item_price">56.90</b>  </dd>
                                </li>

                            </div>


                            <div class="clear"></div>



                            <!--各种规格-->
                            <dl class="iteminfo_parameter sys_item_specpara">
                                <dt class="theme-login"><div class="cart-title">可选规格<span class="icon-angle-right"></span></div></dt>
                                <dd>
                                    <!--操作页面-->

                                    <div class="theme-popover-mask"></div>

                                    <div class="theme-popover">
                                        <div class="theme-span"></div>
                                        <div class="theme-poptit">
                                            <a href="javascript:;" title="关闭" class="close">×</a>
                                        </div>
                                        <div class="theme-popbod dform">
                                            <form class="theme-signin" name="loginform" action="" method="post">

                                                <div class="theme-signin-left">

                                                    <div class="theme-options">
                                                        <div class="cart-title"><h4 class="text-danger"><strong>口味</strong></h4></div>
                                                        <ul>
                                                            <li class="sku-line selected">原味<i></i></li>
                                                            <li class="sku-line">奶油<i></i></li>
                                                            <li class="sku-line">炭烧<i></i></li>
                                                            <li class="sku-line">咸香<i></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="theme-options">
                                                        <div class="cart-title"><h4 class="text-danger"><strong>包装</strong></h4></div>
                                                        <ul>
                                                            <li class="sku-line selected">手袋单人份<i></i></li>
                                                            <li class="sku-line">礼盒双人份<i></i></li>
                                                            <li class="sku-line">全家福礼包<i></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="theme-options">

                                                        <div class="theme-options">
                                                        <div class="cart-title number"><h4 class="text-danger"><strong>数量</strong></h4></div>
                                                        <dd>
                                                            <input id="min" class="am-btn am-btn-default" name="" type="button" value="-" onclick="adda(this)"/>
                                                            <input name="" id="addGoods"type="text" value="1" style="width:30px;" />
                                                            <input id="add" class="am-btn am-btn-default" name="" type="button" value="+" onclick="adda(this)" />

                                                        </dd>

                                                    </div>

                                                            <h4><span id="Stock" class="tb-hidden">库存<span class="stock">1000</span>件</span></h4>


                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="btn-op">
                                                        <div class="btn btn btn-warning">确认</div>
                                                        <div class="btn close btn am-btn-warning">取消</div>
                                                    </div>
                                                </div>
                                                <div class="theme-signin-right">
                                                    <div class="img-info">
                                                        <img src="../images/songzi.jpg" />
                                                    </div>
                                                    <div class="text-info">
                                                        <span class="J_Price price-now">¥39.00</span>
                                                        <span id="Stock" class="tb-hidden">库存<span class="stock">1000</span>件</span>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>

                                </dd>
                            </dl>
                             <div class="pay">
                            <div class="pay-opt">
                            <a href="home.html"><span class="icon-home icon-fw">首页</span></a>
                            <a><span class="icon-heart icon-fw">收藏</span></a>
                            </div>
                            <li>
                                <div class="clearfix tb-btn tb-btn-buy theme-login">
                                    <a id="LikBuy" title="点此按钮到下一步确认购买信息" href="#">立即购买</a>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix tb-btn tb-btn-basket theme-login">
                                    <a id="LikBasket" title="加入购物车" href="#"><i></i>加入购物车</a>
                                </div>
                            </li>
                        </div>

                    </div>
                    </div>
               </div>
              </div>
          </div>




                    <br/>
                   <div class="row">
                  <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <div class="introduceMain">

                            <div class="tabs-bd">

                                <div class="tab-panel fade in active">
                                    <div class="J_Brand">
                                        <div class="attr-list-hd after-market-hd">
                                            <h4>产品介绍</h4>
                                        </div>
                                           <div class="clear"></div>
                                            <h>从数据库调出介绍</h>
                                        <div class="attr-list-hd tm-clear">
                                            <h4>产品参数</h4></div>
                                        <div class="clear"></div>
                                        <ul id="J_AttrUL">
                                            <li title="">产品类型:&nbsp;烘炒类</li>
                                            <li title="">原料产地:&nbsp;巴基斯坦</li>
                                            <li title="">产地:&nbsp;湖北省武汉市</li>
                                            <li title="">配料表:&nbsp;进口松子、食用盐</li>
                                            <li title="">产品规格:&nbsp;210g</li>
                                            <li title="">保质期:&nbsp;180天</li>
                                            <li title="">产品标准号:&nbsp;GB/T 22165</li>
                                            <li title="">生产许可证编号：&nbsp;QS4201 1801 0226</li>
                                            <li title="">储存方法：&nbsp;请放置于常温、阴凉、通风、干燥处保存 </li>
                                            <li title="">食用方法：&nbsp;开袋去壳即食</li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="details">
                                        <div class="attr-list-hd after-market-hd">
                                            <h4>商品细节</h4>
                                        </div>
                                        <div class="twlistNews">
                                            <img src="../images/tw1.jpg" />
                                            <img src="../images/tw2.jpg" />
                                            <img src="../images/tw3.jpg" />
                                            <img src="../images/tw4.jpg" />
                                            <img src="../images/tw5.jpg" />
                                            <img src="../images/tw6.jpg" />
                                            <img src="../images/tw7.jpg" />
                                        </div>
                                    </div>
                                    <div class="clear"></div>

                                </div>
                            </div>
                        </div>
                </div>
        </div>
    </body>

</html>
