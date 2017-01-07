var app = angular.module('weipan', []);
app.controller('startupController', function($scope) {

		//startupController.$inject = ['$rootScope', '$scope', '$location', '$http', 'commAlertService'];
        var defalutStyle = { 'margin-top': '0' };
        var selectedStyle = { 'border': '1px solid #A3855F', 'margin-top': '0' };

        $scope.selectGoodsButtonStyles = {
            'AG': selectedStyle,
            'CU': defalutStyle,
            'FU': defalutStyle
        };
        $scope.btnBuyDisabled = false;
        $scope.currentGoodsCode = 'AG';
        $scope.currentTransactionGoodsId = 0;
        $scope.swiper = null;

        //ng-class="{ 'btn-primary': currentGoodsCode == '@(firstGoods.Code)' }"

        activate();

        function activate() {
            $scope.changeGoods = function (goodsCode, index, time) {
                $scope.currentGoodsCode = goodsCode;
                for (var item in $scope.selectGoodsButtonStyles) {
                    if (item === goodsCode) {
                        $scope.selectGoodsButtonStyles[item] = selectedStyle;
                    } else {
                        $scope.selectGoodsButtonStyles[item] = defalutStyle;
                    }
                }
                var url = document.getElementById('hqChartUrl').value + '?goodsCode=' + goodsCode + '&lineType=1';
                if (document.getElementById('hqIframe').src !== url) {
                    document.getElementById('hqIframe').src = url;
                }
                if ($scope.swiper !== null && index !== undefined) {
                    $scope.swiper.slideTo(index, time, false);
                }
            };

            $scope.swiperActiveIndex = -1;

            function changeSlide(swiper, activeIndex, eventName) {
                if ($scope.swiperActiveIndex != activeIndex) {
                    $scope.swiperActiveIndex = activeIndex;
                    var slide = swiper.slides[activeIndex];
                    $scope.changeGoods(slide.attributes['data-transactiongoodscode'].value);
                }
            }
			
			$scope.checkTransactionPassword = function () {
                /*$http.post('/api/TransactionPassword/', $scope.vm.TransactionPassword).success(function (resp) {
                    if (resp.success) {
                        angular.extend($scope.vm.TransactionPassword, {
                            TransactionPassword: null
                        });
                        $rootScope.Ui.turnOff('modalTransactionPassword');
                        $rootScope.reGetUser();
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 1000);
                    }
               });*/
            };
			

            $scope.initSwiper = function () {
                $scope.swiper = new Swiper('.swiper-container', {
                    loop: true,
                    pagination: '.swiper-pagination',
                    paginationClickable: true,
                    slidesPerGroup: 2,
                    slidesPerView: 2,
                    spaceBetween: 5,
                    onSlidePrevStart: function (swiper) {
                        changeSlide(swiper, swiper.activeIndex, 'onSlidePrevStart');
                    },
                    onSlidePrevEnd: function (swiper) {
                        var slide = swiper.slides[swiper.activeIndex];
                        if (slide.className === 'swiper-slide swiper-slide-duplicate swiper-slide-active') {
                            if (swiper.activeIndex === 0) {
                                $scope.changeGoods(slide.attributes['data-transactiongoodscode'].value, $scope.swiperSlideCount, 0);
                            }
                        } else {
                            changeSlide(swiper, swiper.activeIndex, 'onSlidePrevEnd');
                        }
                    },
                    onSlideNextStart: function (swiper) {
                        changeSlide(swiper, swiper.activeIndex, 'onSlideNextStart');
                    },
                    onSlideNextEnd: function (swiper) {
                        var slide = swiper.slides[swiper.activeIndex];
                        if (slide.className === 'swiper-slide swiper-slide-duplicate swiper-slide-active') {
                            if (swiper.activeIndex === $scope.swiperSlideCount + 2) {
                                $scope.changeGoods(slide.attributes['data-transactiongoodscode'].value, 2, 0);
                            }
                        } else {
                            changeSlide(swiper, swiper.activeIndex, 'onSlideNextEnd');
                        }
                    },
                    onTouchEnd: function (swiper) {
                        var slide = swiper.slides[swiper.activeIndex];
                        if (slide.className === 'swiper-slide swiper-slide-duplicate swiper-slide-active') {
                            if (swiper.activeIndex === $scope.swiperSlideCount + 2) {
                                $scope.changeGoods(slide.attributes['data-transactiongoodscode'].value, 2, 0);
                            }
                        } else {
                            changeSlide(swiper, swiper.activeIndex, 'onTouchEnd');
                        }
                    }
                });
            };
            
            //$rootScope.viewContentLoaded($scope, function () {

                $scope.changeGoods('AG');

                $scope.initSwiper();
           // });
        }
});