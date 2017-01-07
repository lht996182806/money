
var weipan = {

    url: function (url, params) {
        var queryString = '';
        angular.forEach(params, function (value, name) {
            if (name != 't') {
                queryString += '&' + name + '=' + value;
            }
        });
        return url + '?t=' + weipan.getTime() + queryString;
    },

    getTime: function () {
        return new Date().getTime();
    },

    getErrorMsg: function (errors) {
        var msg = '';
        for (var i in errors) {
            msg += errors[i].msg + '\r\n';
        }
        return msg;
    },

    getVerifyCodeFunc: function (scope, interval) {

        var $scope = scope;
        var $interval = interval;
        var second = 0;
        var timer = null;

        $scope.btnGetVerifyCodeText = '短信验证';
        $scope.btnGetVerifyCodeDisabled = false;
        $scope.btnGetVerifyCodeCss = '';

        var execute = function () {
            if (second <= 0) {
                $scope.btnGetVerifyCodeText = '短信验证';
                $scope.btnGetVerifyCodeDisabled = false;
                $scope.btnGetVerifyCodeCss = '';
                $interval.cancel(timer);
                timer = null;
            } else {
                $scope.btnGetVerifyCodeText = second + '秒后重发';
                $scope.btnGetVerifyCodeDisabled = true;
                $scope.btnGetVerifyCodeCss = 'btn-getverifycode';
                second--;
            }
        };

        this.do = function () {
            second = 59;
            $scope.btnGetVerifyCodeDisabled = true;
            timer = $interval(execute, 1000);
        };
    },

    getCIACodeFunc: function (scope, interval) {

        var $scope = scope;
        var $interval = interval;
        var second = 0;
        var timer = null;

        $scope.btnGetCIACodeText = 'CIA验证';
        $scope.btnGetCIACodeDisabled = false;
        $scope.btnGetCIACodeCss = '';

        var execute = function () {
            if (second <= 0) {
                $scope.btnGetCIACodeText = 'CIA验证';
                $scope.btnGetCIACodeDisabled = false;
                $scope.btnGetCIACodeCss = '';
                $interval.cancel(timer);
                timer = null;
            } else {
                $scope.btnGetCIACodeText = second + '秒后重发';
                $scope.btnGetCIACodeDisabled = true;
                $scope.btnGetCIACodeCss = 'btn-getverifycode';
                second--;
            }
        };

        this.do = function () {
            second = 59;
            $scope.btnGetCIACodeDisabled = true;
            timer = $interval(execute, 1000);
        };
    },

    round: function (number, precision) {
        return Math.round(number * Math.pow(10, precision)) / Math.pow(10, precision);
    }
};


angular
	.module('weipan', [
	  'ngRoute',
	  'mobile-angular-ui',
	  'mobile-angular-ui.gestures'
	])
    .run(function ($transform) {
	   window.$transform = $transform;
    })
    .config(function ($routeProvider) {
        $routeProvider.when('/home', {
            templateUrl: function ($routeParams) {
                return weipan.url('/index.php/Home/Index/home.html', $routeParams);
            },
            controller: 'homeController',
            reloadOnSearch: false
        });

        $routeProvider.when('/myBuyTransactions', {
            templateUrl: function ($routeParams) {
                return weipan.url('/index.php/Home/Index/index2.html', $routeParams);
            },
            controller: 'myBuyTransactionsController',
            
            reloadOnSearch: false
        });

        $routeProvider.when('/deposit', {
            templateUrl: function ($routeParams) {
                return weipan.url('/index.php/Home/User/recharge.html', $routeParams);
            },
            controller: 'depositController',
            reloadOnSearch: false
        });
      
        $routeProvider.when('/accountDetails', {
            templateUrl: function ($routeParams) {
                return weipan.url('/index.php/Home/Detailed/drevenue.html', $routeParams);
            },
            controller: 'accoutDetailsController',
            reloadOnSearch: false
        });

        $routeProvider.when('/registerLevel300User', {
            templateUrl: function ($routeParams) {
                return weipan.url('/index.php/Home/User/recharges.html', $routeParams);
            },
            controller: 'registerLevel300UserController',
            reloadOnSearch: false
        });

        $routeProvider.when('/registerLevel400User', {
            templateUrl: function ($routeParams) {
                return weipan.url('/Weixin/RegisterLevel400User.html', $routeParams);
            },
            controller: 'registerLevel400UserController',
            reloadOnSearch: false
        });

        $routeProvider.when('/transactionHistory', {
            templateUrl: function ($routeParams) {
                return weipan.url('/index.php/Home/Detailed/dtrading.html', $routeParams);
            },
            controller: 'transactionHistoryController',
            reloadOnSearch: false
        });

        $routeProvider.when('/help', {
            templateUrl: function ($routeParams) {
                return weipan.url('/Weipan/Help.html', $routeParams);
            },
            controller: 'helpController',
            reloadOnSearch: false
        });

        $routeProvider.when('/withdrawDeposit', {
            templateUrl: function ($routeParams) {
                return weipan.url('/index.php/Home/User/cash.html', $routeParams);
            },
            controller: 'withdrawDepositController',
            reloadOnSearch: false
        });

        $routeProvider.when('/my', {
            templateUrl: function ($routeParams) {
                return weipan.url('/index.php/Home/User/memberinfo.html', $routeParams);
            },
            controller: 'myController',
            reloadOnSearch: false
        });

        $routeProvider.when('/myQRCode', {
            templateUrl: function ($routeParams) {
                return weipan.url('/index.php/Home/User/img.html', $routeParams);
            },
            reloadOnSearch: false
        });

        $routeProvider.when('/upgradeUserLevelTo300', {
            templateUrl: function ($routeParams) {
                return weipan.url('/My/UpgradeUserLevelTo300.html', $routeParams);
            },
            controller: 'upgradeUserLevelTo300Controller',
            reloadOnSearch: false
        });

        $routeProvider.when('/changeTransactionPassword', {
            templateUrl: function ($routeParams) {
                return weipan.url('/index.php/Home/User/edituser.html', $routeParams);
            },
            controller: 'changeTransactionPasswordController',
            reloadOnSearch: false
        });

        $routeProvider.when('/buyTransactionDetails', {
            templateUrl: function ($routeParams) {
                return weipan.url('/Weipan/BuyTransactionDetails.html', $routeParams);
            },
            controller: 'buyTransactionDetailsController',
            reloadOnSearch: false
        });

        $routeProvider.when('/pay', {
            templateUrl: function ($routeParams) {
                return weipan.url('/Weixin/Pay', $routeParams);
            },
            reloadOnSearch: false
        });

        $routeProvider.when('/forgetPassword', {
            templateUrl: function ($routeParams) {
                return weipan.url('/Weipan/ForgetPassword.html', $routeParams);
            },
            controller: 'forgetPasswordController',
            reloadOnSearch: false
        });

        $routeProvider.when('/article', {
            templateUrl: function ($routeParams) {
                return weipan.url('/Weipan/Article.html', $routeParams);
            },
            reloadOnSearch: false
        });

        $routeProvider.when('/articleList', {
            templateUrl: function ($routeParams) {
                return weipan.url('/Weipan/ArticleList.html', $routeParams);
            },
            reloadOnSearch: false
        });

        $routeProvider.when('/reAuth', {
            templateUrl: function ($routeParams) {
                return weipan.url('/Weipan/ReAuth.html', $routeParams);
            },
            controller: 'reAuthController',
            reloadOnSearch: false
        });
    });
angular
    .module('weipan')
    .value("alerts", [])
    .factory('commAlertService', ['$rootScope', '$timeout', 'alerts', commAlertService]);

function commAlertService($rootScope, $timeout, alerts) {
    return {
        "alertService": function () {
            var alertJson = {};
            $rootScope.alerts = alerts;
            alertJson.add = function (type, msg, time) {
                $rootScope.alerts.push({
                    'type': type, 'msg': msg, 'close': function () {
                        alertJson.closeAlert(this);
                    }
                });
                if (time) {
                    $timeout(function () {
                        for (var alert in $rootScope.alerts) {
                            alertJson.closeAlert(alert);
                        }
                        $rootScope.alerts = [];
                        alerts = [];
                    }, time);
                }
            };
            alertJson.closeAlert = function (alert) {
                $rootScope.alerts.splice($rootScope.alerts.indexOf(alert), 1);
            };
            return alertJson;
        }
    };
}

(function() {
    'use strict';

    angular
        .module('weipan')
        .directive('depositAlert', depositAlert);

    depositAlert.$inject = ['$rootScope', 'commAlertService'];
    
    function depositAlert($rootScope, commAlertService) {
        var directive = {
            link: link,
            restrict: 'EA'
        };
        return directive;

        function link(scope, element, attrs) {
            scope.$watch(attrs.depositAlert, function () {
                commAlertService.alertService().add('success', "充值成功", 2000);
            });
        }
    }

})();

angular
    .module('weipan')
    .directive('focusInput', [focusInput]);

function focusInput() {
    var isAndroid = /Android/i.test(navigator.userAgent);
    
    return {
        scope: {},
        restrict: 'A',
        compile: function (elem, attr) {
            var scrollIntoViewEl = angular.element(document.getElementById('scrollIntoViewEl'));

            elem.bind('click', function () {
                angular.forEach(elem.find('input'), function (value) {
                    value.focus();
                    if (isAndroid && attr.focusInput !== '' && scrollIntoViewEl.length !== 0) {
                        scrollIntoViewEl.css("margin-bottom", attr.focusInput + 'px');
                        if (value.scrollIntoView !== undefined) {
                            value.scrollIntoView(true);
                        }
                    }
                });
            });

            if (isAndroid && attr.focusInput !== '' && scrollIntoViewEl.length !== 0) {
                angular.forEach(elem.find('input'), function (value) {
                    var el = angular.element(value);
                    el.bind('blur', function () {
                        scrollIntoViewEl.css("margin-bottom", '');
                    });
                });
            }
        }
    };
}
(function() {
    'use strict';

    angular
        .module('weipan')
        .directive('getMyBuyTransaction', getMyBuyTransaction);

    getMyBuyTransaction.$inject = ['$rootScope', '$http'];
    
    function getMyBuyTransaction($rootScope, $http) {
        // Usage:
        //     <getMyBuyTransaction></getMyBuyTransaction>
        // Creates:
        // 
        var directive = {
            link: link,
            restrict: 'EA'
        };
        return directive;

        function link(scope, element, attrs) {

            scope.$watch(attrs.getMyBuyTransaction, function () {
                $http.get(weipan.url('My/BuyTransaction')).success(function (resp) {
                    for (var i = 0; i < resp.rows.length; i++) {
                        $rootScope.MyBuyTransactionMap[resp.rows[i].Id] = resp.rows[i];
                    }
                });
            });
        }
    }

})();
(function() {
    'use strict';

    angular
        .module('weipan')
        .directive('getTransactionGoods', getTransactionGoods);

    getTransactionGoods.$inject = ['$rootScope', '$http'];
    
    function getTransactionGoods($rootScope, $http) {
        var directive = {
            link: link,
            restrict: 'EA'
        };
        return directive;

        function link(scope, element, attrs) {

            scope.$watch(attrs.transactionGoods, function () {
                $http.get(weipan.url('My/TransactionGoods')).success(function (resp) {
                    for (var i = 0; i < resp.length; i++) {
                        $rootScope.TransactionGoodsMap[resp[i].Id] = resp[i];
                    }
                });
            });
        }
    }

})();

(function() {
    'use strict';
    
    angular
        .module('weipan')
        .directive('getUserProfile', getUserProfile);

    getUserProfile.$inject = ['$rootScope', '$location', '$http'];

    function getUserProfile($rootScope, $location, $http) {

        var directive = {
            link: link,
            restrict: 'EA'
        };

        return directive;

        function link(scope, element, attrs) {
            scope.$watch(attrs.getUserProfile, function (value) {

                $http.get('My/UserProfile').success(function (resp) {

                    angular.extend($rootScope.CurrentUser, resp);
                
                    if (scope.initUser !== undefined) {
                        scope.initUser(resp);
                    }
                });
            });
        }
    }
})();
(function() {
    'use strict';

    angular
        .module('weipan')
        .directive('goodsHq', ['$rootScope', '$http', '$interval', goodsHq]);

    goodsHq.$inject = ['$rootScope', '$http', '$location'];

    function goodsHq($rootScope, $http, $interval) {

        var directive = {
            link: link,
            restrict: 'EA'
        };

        return directive;
     
        function link(scope, element, attrs) {
            var goods = attrs.goodsHq;
          
            function execute() {
                $http
                    .jsonp('http://hq.gz.1251923837.clb.myqcloud.com/HQ/Goods2/' + goods + '?callback=JSON_CALLBACK&t=' + weipan.getTime())
                    .success(function (data, status, headers, config) {
                        var current = data.c;
                        var n = parseFloat(current);
                        var o = parseFloat(element.text());
                       
                        //var p = element.parent();
                        var p = element;
                        if (n > o) {
                            p.addClass('btn-hq-up');
                            p.removeClass('btn-hq-down');
                            element.html(current + ' <i class="fa fa-long-arrow-up"></i>');
                        } else if (n < o) {
                            p.addClass('btn-hq-down');
                            p.removeClass('btn-hq-up');
                            element.html(current + ' <i class="fa fa-long-arrow-down"></i>');
                        }
                        $rootScope.TransactionGoodsHQPrice[$rootScope.TransactionGoodsNames[goods]] = current;
                        //银AG油FU铜CU
                    });
            }

            scope.$watch(attrs.goodsHq, function () {
                execute();
            });

            var timer = $interval(execute, 1500);

            element.on('$destroy', function () {
                $interval.cancel(timer);
            });
        }
    }
})();
(function() {
    'use strict';

    angular
        .module('weipan')
        .directive('myBuyTransactionProfit', myBuyTransactionProfit);

    myBuyTransactionProfit.$inject = ['$rootScope', '$http', '$interval'];
    
    function myBuyTransactionProfit($rootScope, $http, $interval) {

        var directive = {
            link: link,
            restrict: 'EA'
        };

        return directive;

        function link(scope, element, attrs) {
            var transId;

            function execute() {
                var trans = $rootScope.MyBuyTransactionMap[transId];
                if (trans === undefined || trans === null) {
                    return;
                }
                var transGoods = $rootScope.TransactionGoodsMap[trans.TransactionGoodsId];
                if (transGoods === undefined || transGoods === null) {
                    return;
                }
                var transGoodsHQPrice = $rootScope.TransactionGoodsHQPrice[transGoods.Name];
                if (transGoodsHQPrice === undefined || transGoodsHQPrice === null) {
                    return;
                }

                var buyNumber = trans.BuyNumber;
                var buyPrice = trans.BuyPrice;

                var multiple = 10000;
                var profit = (transGoodsHQPrice * multiple - buyPrice * multiple) * buyNumber * ((transGoods.FuctuateAmount * multiple) / (transGoods.FuctuatePrice * multiple)) / multiple;

                profit = trans.BuyType == 1 ? profit : -profit;
                profit = weipan.round(profit, 2);

                if (profit >= 0) {
                    element.css('color', '#CD0000');
                } else {
                    element.css('color', 'green');
                }

                element.text(profit);
                trans.ProfitAmount = profit;

                var todayProfit = scope.vm.TodayProfitInitValue * multiple;
                for (var prop in $rootScope.MyBuyTransactionMap) {
                    todayProfit += $rootScope.MyBuyTransactionMap[prop].ProfitAmount * multiple;
                }
                todayProfit = todayProfit / multiple;
                if (todayProfit > 0) {
                    scope.vm.TodayProfit = '+' + weipan.round(todayProfit, 2);
                    scope.vm.TodayProfitStyle1 = { 'color': '#CD0000', 'display': '', 'font-size': '14px' };
                    scope.vm.TodayProfitStyle2 = { 'color': 'green', 'display': 'none', 'font-size': '14px' };
                } else if (todayProfit < 0) {
                    scope.vm.TodayProfit = weipan.round(todayProfit, 2);
                    scope.vm.TodayProfitStyle1 = { 'color': '#CD0000', 'display': 'none', 'font-size': '14px' };
                    scope.vm.TodayProfitStyle2 = { 'color': 'green', 'display': '', 'font-size': '14px' };
                }
            }

            scope.$watch(attrs.myBuyTransactionProfit, function (value) {
                transId = value;
                execute();
            });

            var timer = $interval(execute, 1000);

            element.on('$destroy', function () {
                $interval.cancel(timer);
            });
        }
    }
})();
(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('accoutDetailsController', accoutDetailsController);

    accoutDetailsController.$inject = ['$rootScope', '$scope', '$route'];

    function accoutDetailsController($rootScope, $scope, $route) {
        $scope.title = 'accoutDetailsController';

        $scope.page = 1;

        activate();

        function activate() {

            $rootScope.setupNgViewSupportReload($scope, $route);

            $rootScope.viewContentLoaded($scope);
        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('buyTransactionDetailsController', buyTransactionDetailsController);

    buyTransactionDetailsController.$inject = ['$rootScope', '$scope', '$route', '$location', '$http', 'commAlertService'];

    function buyTransactionDetailsController($rootScope, $scope, $route, $location, $http, commAlertService) {
        $scope.vm = {};

        $scope.btnChangeDisabled = false;

        activate();

        function activate() {

            $rootScope.setupNgViewSupportReload($scope, $route);

            $scope.setVM = function (id, stopProfit, stopDeficit) {
                $scope.vm.Id = id;
                $scope.vm.StopProfit = parseInt(stopProfit);
                $scope.vm.StopDeficit = parseInt(stopDeficit);

                if ($scope.vm.StopProfit === 0) {
                    $scope.vm.StopProfit = '不设';
                }

                if ($scope.vm.StopDeficit === 0) {
                    $scope.vm.StopDeficit = '不设';
                }
            };

            $scope.increase = function (obj, p, step, min, max) {

                if (obj[p] == '不设') {
                    obj[p] = '0';
                }

                var v = parseInt(obj[p]) + step;
                v = v > max ? max : v;
                v = v < min ? min : v;
                obj[p] = v;

                if (v === 0) {
                    obj[p] = '不设';
                }
            };

            $scope.change = function () {
                $scope.btnChangeDisabled = true;
                $http.put('My/BuyTransaction', $scope.vm).success(function (resp) {
                    if (resp.success) {
                        $rootScope.Ui.turnOff('modalChange');
                        $rootScope.forceReload = true;
                        $location.search({
                            id: $scope.vm.Id,
                            t: weipan.getTime()
                        });
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                    $scope.btnChangeDisabled = false;
                });
            };

            $rootScope.viewContentLoaded($scope);
        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('changeTransactionPasswordController', changeTransactionPasswordController);

    changeTransactionPasswordController.$inject = ['$rootScope', '$scope', '$http', 'commAlertService'];

    function changeTransactionPasswordController($rootScope, $scope, $http, commAlertService) {

        $scope.btnChangeDisabled = false;

        activate();

        function activate() {

            function VM() {
                this.TransactionPassword = null;
                this.NewTransactionPassword = null;
                this.ConfirmNewTransactionPassword = null;
            }

            $scope.vm = new VM();

            $scope.change = function () {
                $scope.btnChangeDisabled = true;
                $http.put('My/TransactionPassword/' + $scope.vm.Id, $scope.vm).success(function (resp) {
                    if (resp.success) {
                        angular.extend($scope.vm, new VM());
                        commAlertService.alertService().add('success', '交易密码修改成功', 1000);
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                    $scope.btnChangeDisabled = false;
                });
            };

            $rootScope.viewContentLoaded($scope);
        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('depositController', depositController);

    depositController.$inject = ['$rootScope', '$scope', '$route', '$http', 'commAlertService'];

    function depositController($rootScope, $scope, $route, $http, commAlertService) {

        $scope.btnDepositDisabled = false;

        activate();

        function activate() {
            $rootScope.setupNgViewSupportReload($scope, $route);

            $scope.vm = { DepositAmount: 10000, Channel: 1 };

            $scope.changeChannel = function (channel) {
                $scope.vm.Channel = channel;
            };

            $scope.changeDepositAmount = function (amount) {
                if (amount === 0) { amount = ''; }
                $scope.vm.DepositAmount = amount;
                if (amount != 50 && amount != 500 && amount != 1000 && amount != 5000) {
                    DepositForm.DepositAmount.focus();
                }
            };

            $scope.deposit = function () {
                $scope.btnDepositDisabled = true;
                $http.post('/index.php/Home/User/recharge.html', $scope.vm).success(function (resp) {
                
                    if (resp.success) {
                    	
                        window.location = '/index.php/Home/Index/index.html#/registerLevel300User?id=' + resp.id;

                        $scope.vm = {
                            Channel: 1, DepositAmount: 10000
                        };
                    	
            
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                    $scope.btnDepositDisabled = false;
                });
            };

            function weixinJsApi() {

                alert(WeixinPayForm.JsApiParam.value);

                WeixinJSBridge.invoke(
                    'getBrandWCPayRequest',
                    WeixinPayForm.JsApiParam.value,
                    function (res) {
                        WeixinJSBridge.log(res.err_msg);
                    }
                );
            }

            $scope.callWeixinPay = function () {
                alert(1);
                if (typeof WeixinJSBridge == "undefined") {
                    if (document.addEventListener) {
                        document.addEventListener('WeixinJSBridgeReady', weixinJsApi, false);
                    }
                    else if (document.attachEvent) {
                        document.attachEvent('WeixinJSBridgeReady', weixinJsApi);
                        document.attachEvent('onWeixinJSBridgeReady', weixinJsApi);
                    }
                } else {
                    weixinJsApi();
                }
            };

            $rootScope.viewContentLoaded($scope);
        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('forgetPasswordController', forgetPasswordController);

    forgetPasswordController.$inject = ['$rootScope', '$scope', '$http', '$location', '$route', '$interval', 'commAlertService'];

    function forgetPasswordController($rootScope, $scope, $http, $location, $route, $interval, commAlertService) {

        $scope.btnResetDisabled = false;

        function VM() {
            this.CellPhone = $rootScope.CurrentUser.CellPhone;
            this.NewTransactionPassword = null;
            this.VerifyCode = null;
        }

        $scope.vm = new VM();

        activate();

        function activate() {

            var func = new weipan.getVerifyCodeFunc($scope, $interval);
            var ciaFunc = new weipan.getCIACodeFunc($scope, $interval);

            $scope.getVerifyCode = function () {
                $scope.btnGetVerifyCodeDisabled = true;
                $http.get('/SMS/SendForForgetPassword').success(function (resp) {
                    if (resp.success) {
                        func.do();
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                        $scope.btnGetVerifyCodeDisabled = false;
                    }
                });
            };

            $scope.getCIACode = function () {
                $http.get('/CIA/SendForForgetPassword').success(function (resp) {
                    if (resp.success) {
                        ciaFunc.do();
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                });
            };

            $scope.reset = function () {
                $scope.btnResetDisabled = true;
                $http.post('/Weipan/ForgetPassword', $scope.vm).success(function (resp) {
                    if (resp.success === true) {
                        $scope.vm = new VM();
                        window.location = '/Weipan/Startup#/home';
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                    $scope.btnResetDisabled = false;
                });
            };

            $rootScope.viewContentLoaded($scope, function () {
                $rootScope.Ui.turnOff('modalTransactionPassword');
            });
        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('helpController', helpController);

    helpController.$inject = ['$scope']; 

    function helpController($scope) {
        $scope.title = 'helpController';

        activate();

        function activate() { }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('homeController', homeController);

    homeController.$inject = ['$rootScope', '$scope', '$http', '$location', '$route', 'commAlertService'];

    function homeController($rootScope, $scope, $http, $location, $route, commAlertService) {

        $scope.vm = {
            BuyNumber: 0,
            BuyType: null,
            PayAmount: 0,
            SellCommissionAmount: 0,
            StopDeficit: 60,
            StopProfit: 0,
            TotalAmount: 0,
            TransactionGoods: {}
        };

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

            $rootScope.setupNgViewSupportReload($scope, $route);
			
            $scope.setBuyTransactionGoods = function (transactionGoodsId, buyType, uprice) {
				
                $scope.currentTransactionGoodsId = transactionGoodsId;
                $scope.vm.TransactionGoods = $rootScope.TransactionGoodsMap[$scope.currentTransactionGoodsId];
                $scope.vm.TransactionGoodsId = $scope.currentTransactionGoodsId;
                $scope.vm.StopProfit = '0';
                $scope.vm.StopDeficit = '0';
                $scope.vm.BuyNumber = 1;
                $scope.vm.BuyType = buyType;
                $scope.vm.PayAmount = uprice;
                $scope.vm.TotalAmount = $scope.vm.BuyNumber*$scope.vm.PayAmount;
                $scope.vm.SellCommissionAmount = 0;
            };

            $scope.caculateBuyTransactionAmount = function () {
            	
                $scope.vm.PayAmount = $scope.vm.TransactionGoods.Price * $scope.vm.BuyNumber;
                var totalAmount = $rootScope.TransactionGoodsHQPrice[$scope.vm.TransactionGoods.Name] * $scope.vm.BuyNumber * ($scope.vm.TransactionGoods.FuctuateAmount / $scope.vm.TransactionGoods.FuctuatePrice);
                var totalAmountStr = totalAmount.toString();
                var len = totalAmountStr.indexOf('.') == -1 ? totalAmountStr.length : totalAmountStr.indexOf('.') + 3;
                totalAmountStr = totalAmountStr.substr(0, len > totalAmountStr.length ? totalAmountStr.length : len);
                $scope.vm.TotalAmount = parseFloat(totalAmountStr);
                $scope.vm.SellCommissionAmount = $scope.vm.TransactionGoods.SellCommissionAmount * 1000 * $scope.vm.BuyNumber / 1000;
            };

            $scope.increase = function (obj, p, step, min, max) {

                if (obj[p] == '不设') {
                    obj[p] = '0';
                }

                var v = parseInt(obj[p]) + step;

                v = v > max ? max : v;
                v = v < min ? min : v;

                obj[p] = v;

                if (v === 0) {
                    obj[p] = '不设';
                }
              if(p == 'BuyNumber'){
            	  $scope.vm.TotalAmount = $scope.vm.PayAmount*$scope.vm.BuyNumber;
              }

                $scope.caculateBuyTransactionAmount();

            };
			
            $scope.buy = function () {
                $scope.btnBuyDisabled = true;
                $http.post(weipan.url("/index.php/Home/Detailed/addorder.html"), $scope.vm).success(function (resp) {
                    if (resp.success) {
                        //$rootScope.reGetUser();
                        //$rootScope.Ui.turnOff('modalBuy');
                        //$location.path('/myBuyTransactions');
                    	alert("购买成功");
                    	location.reload();
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                    $scope.btnBuyDisabled = false;
                });
            };

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
            
            $rootScope.viewContentLoaded($scope, function () {

                $scope.changeGoods('AG');

                $scope.initSwiper();
            });
        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('myBuyTransactionsController', myBuyTransactionsController);

    myBuyTransactionsController.$inject = ['$rootScope', '$scope', '$route', '$http', '$location', 'commAlertService'];

    function myBuyTransactionsController($rootScope, $scope, $route, $http, $location, commAlertService) {
    	
        $scope.vm = {
            TodayProfit: 0,
            TodayProfitStyle1: { 'display': 'none' },
            TodayProfitStyle2: { 'display': 'none' },
            xqs:555,
        };

        $scope.btnSellDisabled = false;

        $scope.btnSellAllDisabled = false;

        activate();

        function activate() {
			
            $rootScope.setupNgViewSupportReload($scope, $route);

            $scope.setBuyTransaction = function (id) {
                $scope.vm = {
                    TodayProfit: 0,
                    TodayProfitStyle1: { 'display': 'none' },
                    TodayProfitStyle2: { 'display': 'none' }
                };
                angular.extend($scope.vm, $rootScope.MyBuyTransactionMap[id]);
            };

            $scope.sell = function () {
                $scope.btnSellDisabled = true;
                $http.post(weipan.url("/api/SellTransaction"), {
                    BuyTransactionId: $scope.vm.Id
                }).success(function (resp) {
                    if (resp.success) {
                        $rootScope.reGetUser();
                        $rootScope.Ui.turnOff('modalSell');
                        $rootScope.forceReload = true;
                        $location.search({ t: weipan.getTime() });
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                    $scope.btnSellDisabled = false;
                });
            };

            $scope.sellAll = function () {
                $scope.btnSellAllDisabled = true;
                $http.post(weipan.url("/Weipan/SellAll")).success(function (resp) {
                    if (resp.success) {
                        $rootScope.reGetUser();
                        $rootScope.Ui.turnOff('modalSellAll');
                        $rootScope.forceReload = true;
                        $location.search({ t: weipan.getTime() });
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                    $scope.btnSellAllDisabled = false;
                });
            };

            $rootScope.viewContentLoaded($scope, function () {

                $scope.vm.TodayProfit = $scope.vm.TodayProfitInitValue * 1000;
                
                if ($scope.vm.TodayProfit >= 0) {
                	$scope.vm.xqs = 555;
                    $scope.vm.TodayProfit = '+' + $scope.vm.TodayProfit / 1000;
                    $scope.vm.TodayProfitStyle1 = { 'color': '#CD0000', 'display': '', 'font-size': '14px' };
                    $scope.vm.TodayProfitStyle2 = { 'color': 'green', 'display': 'none', 'font-size': '14px' };
                } else {
                	$scope.vm.xqs = 5556;
                    $scope.vm.TodayProfit = $scope.vm.TodayProfit / 1000;
                    $scope.vm.TodayProfitStyle1 = { 'color': '#CD0000', 'display': 'none', 'font-size': '14px' };
                    $scope.vm.TodayProfitStyle2 = { 'color': 'green', 'display': '', 'font-size': '14px' };
                }
     
            });
        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('myController', myController);

    myController.$inject = ['$rootScope', '$scope']; 

    function myController($rootScope, $scope) {

        activate();

        function activate() {
            $rootScope.viewContentLoaded($scope);
        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('reAuthController', myController);

    myController.$inject = ['$rootScope', '$scope', '$location'];

    function myController($rootScope, $scope, $location) {

        activate();

        function activate() {
            if ($location.path() !== '/reAuth') {
                $location.path('/reAuth');
            }
            $rootScope.viewContentLoaded($scope);
        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('registerLevel200UserController', registerLevel200UserController);

    registerLevel200UserController.$inject = ['$rootScope', '$scope', '$http', '$location', '$route', '$interval', 'commAlertService'];

    function registerLevel200UserController($rootScope, $scope, $http, $location, $route, $interval, commAlertService) {

        $scope.btnRegisterDisabled = false;

        activate();

        function activate() {

            function VM() {
                this.WeixinUserId = 0;
                this.AlipayUserId = 0;
                this.Password = null;
                this.FriendlyName = null;
                this.Linkman = null;
                this.CellPhone = null;
                this.ParentUserCode = null;
                this.RefereeUserCode = null;
                this.VerifyCode = null;
            }

            $scope.vm = new VM();

            var func = new weipan.getVerifyCodeFunc($scope, $interval);
            $scope.getVerifyCode = function () {
                if ($scope.vm.CellPhone === undefined || $scope.vm.CellPhone === null || $scope.vm.CellPhone.length === 0) {
                    commAlertService.alertService().add('warning', '请输入手机号码', 2000);
                } else {
                    $scope.btnGetVerifyCodeDisabled = true;
                    $http.get('/SMS/SendForRegister?cellPhone=' + $scope.vm.CellPhone).success(function (resp) {
                        if (resp.success) {
                            func.do();
                        } else {
                            commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                            $scope.btnGetVerifyCodeDisabled = false;
                        }
                    });
                }
            };

            $scope.register = function () {
                $scope.btnRegisterDisabled = true;
                $http.post('/Weixin/RegisterLevel200User', $scope.vm).success(function (resp) {
                    if (resp.success === true) {
                        commAlertService.alertService().add('success', "微会员申请提交成功", 2000);
                        $scope.wm = new VM();
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                    $scope.btnRegisterDisabled = false;
                });
            };
        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('registerLevel300UserController', registerLevel300UserController);

    registerLevel300UserController.$inject = ['$rootScope', '$scope', '$http', '$location', '$route', '$interval', 'commAlertService'];

    function registerLevel300UserController($rootScope, $scope, $http, $location, $route, $interval, commAlertService) {

        $scope.btnRegisterDisabled = false;

        activate();

        function activate() {

            function VM() {
                this.WeixinUserId = 0;
                this.AlipayUserId = 0;
                this.TransactionPassword = null;
                this.Password = null;
                this.RealName = null;
                this.IDCard = null;
                this.CellPhone = null;
                this.Email = null;
                this.RefereeUserCode = null;
                this.VerifyCode = null;
            }

            $scope.vm = new VM();

            var func = new weipan.getVerifyCodeFunc($scope, $interval);
            var ciaFunc = new weipan.getCIACodeFunc($scope, $interval);

            $scope.getVerifyCode = function () {
                if ($scope.vm.CellPhone === undefined || $scope.vm.CellPhone === null || $scope.vm.CellPhone.length === 0) {
                    commAlertService.alertService().add('warning', '请输入手机号码', 2000);
                } else {
                    $scope.btnGetVerifyCodeDisabled = true;
                    $http.get('/SMS/SendForRegister?cellPhone=' + $scope.vm.CellPhone).success(function (resp) {
                        if (resp.success) {
                            func.do();
                        } else {
                            commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                            $scope.btnGetVerifyCodeDisabled = false;
                        }
                    });
                }
            };

            $scope.getCIACode = function () {
                $http.get('/CIA/SendForRegister?cellPhone=' + $scope.vm.CellPhone).success(function (resp) {
                    if (resp.success) {
                        ciaFunc.do();
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                });
            };

            $scope.register = function () {
                $scope.btnRegisterDisabled = true;
                $http.post('/Weixin/RegisterLevel300User', $scope.vm).success(function (resp) {
                    if (resp.success === true) {
                        window.location = '/Weixin/Auth?ul=300';
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                    $scope.btnRegisterDisabled = false;
                });
            };
        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('registerLevel400UserController', registerLevel400UserController);

    registerLevel400UserController.$inject = ['$rootScope', '$scope', '$http', '$location', '$route', '$interval', 'commAlertService'];

    function registerLevel400UserController($rootScope, $scope, $http, $location, $route, $interval, commAlertService) {

        $scope.btnRegisterDisabled = false;
        $scope.btnAcceptChecked = true;

        activate();

        function activate() {

            function VM() {
                this.WeixinUserId = 0;
                this.AlipayUserId = 0;
                this.TransactionPassword = null;
                this.RealName = null;
                this.IDCard = null;
                this.CellPhone = null;
                this.Email = null;
                this.RefereeUserCode = null;
                this.VerifyCode = null;
            }

            $scope.vm = new VM();

            var func = new weipan.getVerifyCodeFunc($scope, $interval);
            var ciaFunc = new weipan.getCIACodeFunc($scope, $interval);

            $scope.getVerifyCode = function () {
                if ($scope.vm.CellPhone === undefined || $scope.vm.CellPhone === null || $scope.vm.CellPhone.length === 0) {
                    commAlertService.alertService().add('warning', '请输入手机号码', 2000);
                } else {
                    $scope.btnGetVerifyCodeDisabled = true;
                    $http.get('/SMS/SendForRegister?cellPhone=' + $scope.vm.CellPhone).success(function (resp) {
                        if (resp.success) {
                            func.do();
                        } else {
                            commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                            $scope.btnGetVerifyCodeDisabled = false;
                        }
                    });
                }
            };

            $scope.getCIACode = function () {
                $http.get('/CIA/SendForRegister?cellPhone=' + $scope.vm.CellPhone).success(function (resp) {
                    if (resp.success) {
                        ciaFunc.do();
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                });
            };

            $scope.register = function () {
                $scope.btnRegisterDisabled = true;
                $http.post('/Weixin/RegisterLevel400User', $scope.vm).success(function (resp) {
                    if (resp.success === true) {
                        window.location = '/Weixin/Auth?ul=400';
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                    $scope.btnRegisterDisabled = false;
                });
            };
        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('startupController', startupController);

    startupController.$inject = ['$rootScope', '$scope', '$location', '$http', 'commAlertService'];
	
    function startupController($rootScope, $scope, $location, $http, commAlertService) {

        activate();
		
        function activate() {
			
            $rootScope.MyBuyTransactionMap = {};

            $rootScope.TransactionGoodsMap = {};

            $rootScope.TransactionGoodsNames = {
                AG: '中江银',
                FU: '中江油',
                CU: '中江铜'
            };

            $rootScope.TransactionGoodsHQPrice = {};

            $rootScope.CurrentUser = {};

            $scope.vm = {};

            $scope.initUser = function (user) {
                angular.extend($scope.vm, user);
            };
			
            $scope.vm.TransactionPassword = {};
            angular.extend($scope.vm.TransactionPassword, {
                TransactionPassword: null
            });
			
            $scope.checkTransactionPassword = function () {
                $http.post('My/TransactionPassword', $scope.vm.TransactionPassword).success(function (resp) {//判断提交的交易密码是否正确
                    if (resp.success) {
                        angular.extend($scope.vm.TransactionPassword, {
                            TransactionPassword: null
                        });
                        $rootScope.Ui.turnOff('modalTransactionPassword');
                        $rootScope.reGetUser();
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 1000);
                    }
                });
            };

            $scope.paths = '#/home;#/myBuyTransactions;';
            $scope.$on('$routeChangeStart', function () {
				
                if ($rootScope.CurrentUser.Token === undefined || $rootScope.CurrentUser.Token === null) {
                    $rootScope.reGetUser(function () {
						//alert($rootScope.CurrentUser.Token );
                        if (($rootScope.CurrentUser.Token === undefined || $rootScope.CurrentUser.Token === null) && $scope.paths.indexOf('#' + $location.path() + ';') > -1) {
                            $rootScope.Ui.turnOn('modalTransactionPassword');
                        }
                    });
                }
            });

            $rootScope.reGetUser = function (callback) {
                $http.get('My/UserProfile').success(function (resp) {
                    angular.extend($scope.vm, resp);
                    angular.extend($rootScope.CurrentUser, resp);
                    if (callback !== undefined) {
                        callback();
                    }
                });
            };

            $rootScope.setupNgViewSupportReload = function (scope, route) {
                $rootScope.forceReload = false;
                scope.$on('$routeUpdate', function () {
                    if ($rootScope.forceReload) {
                        route.reload();
                        $rootScope.forceReload = false;
                    }
                });
            };

            $rootScope.viewContentLoaded = function (scope, callback) {
                scope.$on('$viewContentLoaded', function () {
                     if (document.cookie.indexOf('__WEIPAN__=') === -1) {
                        if ($rootScope.CurrentUser.WeixinUserId > 0) {
                           // window.location = '/Weixin/Auth';  //判断微信登录用户ID
                        } else if ($rootScope.CurrentUser.AlipayUserId > 0) {
							//alert(22222);
                            window.location = '/Alipay/Auth';
                        } else {
                          /*  if (navigator.userAgent.indexOf('MicroMessenger') > -1) { //判断是否为微信内置浏览器 -1 true 
                                window.location = '/Weixin/Auth';
                            } else {
                                window.location = '/Alipay/Auth';
								
                            }*/
                        }
                     }
                     if (callback !== undefined) {
                         callback();
                     }
                });
            };

            $rootScope.pager = function (page) {
                $rootScope.forceReload = true;
                $location.search({ p: page, t: weipan.getTime() });
            };

        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('transactionHistoryController', transactionHistoryController);

    transactionHistoryController.$inject = ['$rootScope', '$scope', '$route'];

    function transactionHistoryController($rootScope, $scope, $route) {
        $scope.title = 'transactionHistoryController';

        activate();

        function activate() {
            $rootScope.setupNgViewSupportReload($scope, $route);

            $rootScope.viewContentLoaded($scope);
        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('upgradeUserLevelTo300Controller', upgradeUserLevelTo300Controller);

    upgradeUserLevelTo300Controller.$inject = ['$rootScope', '$scope', '$http', '$interval', 'commAlertService'];

    function upgradeUserLevelTo300Controller($rootScope, $scope, $http, $interval, commAlertService) {

        activate();

        function activate() {

            function VM() {
                this.Password = null;
                this.FriendlyName = $rootScope.CurrentUser.FriendlyName;
                this.CellPhone = $rootScope.CurrentUser.CellPhone;
                this.VerifyCode = null;
                this.ParentCode = null;
                this.UserLevel = 300;
            }

            $scope.vm = new VM();

            var func = new weipan.getVerifyCodeFunc($scope, $interval);
            var ciaFunc = new weipan.getCIACodeFunc($scope, $interval);

            $scope.getVerifyCode = function () {
                $scope.btnGetVerifyCodeDisabled = true;
                $http.get('/SMS/SendForUpgradeUserLevelTo300').success(function (resp) {
                    if (resp.success) {
                        func.do();
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                        $scope.btnGetVerifyCodeDisabled = false;
                    }
                });
            };

            $scope.getCIACode = function () {
                $http.get('/CIA/SendForUpgradeUserLevelTo300').success(function (resp) {
                    if (resp.success) {
                        func.do();
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                });
            };

            $scope.upgrade = function () {
                $http.post('/api/UpgradeUserLevelTo300', $scope.vm).success(function (resp) {
                    if (resp.success) {
                        commAlertService.alertService().add('success', "经纪人申请提交成功", 2000);
                        $scope.wm = new VM();
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                });
            };

            $rootScope.viewContentLoaded($scope);
        }
    }
})();

(function () {
    'use strict';

    angular
        .module('weipan')
        .controller('withdrawDepositController', withdrawDepositController);

    withdrawDepositController.$inject = ['$rootScope', '$scope', '$http', '$interval', 'commAlertService'];

    function withdrawDepositController($rootScope, $scope, $http, $interval, commAlertService) {

        $scope.btnWithdrawDepositDisabled = false;

        activate();

        function activate() {

            function VM() {
                this.BankName = null;
                this.BankAccountNumber = null;
                this.BankAccountUserName = null;
                this.WithdrawDepositAmount = 0;
                this.TransactionPassword = null;
                this.VerifyCode = null;
            }

            $scope.vm = new VM();

            $scope.withdrawDeposit = function () {
                $scope.btnWithdrawDepositDisabled = true;
                $http.post('/index.php/Home/User/cash.html', $scope.vm).success(function (resp) {
                    $scope.btnWithdrawDepositDisabled = false;
                    
                    if (resp.success) {
                        $rootScope.reGetUser();
                        $scope.vm = new VM();
                        //commAlertService.alertService().add('success', "提现申请成功", 2000);
                        alert("提现申请成功");
                        location.reload();
                    } else {
                    	alert(resp.errors);
                        //commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                });
            };

            var func = new weipan.getVerifyCodeFunc($scope, $interval);
            var ciaFunc = new weipan.getCIACodeFunc($scope, $interval);

            $scope.getVerifyCode = function () {
                $scope.btnGetVerifyCodeDisabled = true;
                $http.get('/SMS/SendForWithdrawDeposit').success(function (resp) {
                    if (resp.success) {
                        func.do();
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                        $scope.btnGetVerifyCodeDisabled = false;
                    }
                });
                
            };

            $scope.getCIACode = function () {
                $http.get('/CIA/SendForWithdrawDeposit').success(function (resp) {
                    if (resp.success) {
                        ciaFunc.do();
                    } else {
                        commAlertService.alertService().add('warning', weipan.getErrorMsg(resp.errors), 2000);
                    }
                });
            };

            $rootScope.viewContentLoaded($scope);
        }
    }
})();
