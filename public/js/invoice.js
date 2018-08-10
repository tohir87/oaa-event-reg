var invoiceApp = angular.module('invoice', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

invoiceApp.controller('invoiceCtrl', function ($scope, $http) {

    $scope.data = { gold_access_price : 0, vat_percent : 0.025, access_level : '' };
    
    /**
     * 
     * @param {type} price_
     * @param {type} access_level_
     * @returns {undefined}
     */
    $scope.setGoldPrice = function(price_, access_level_) {
        $scope.data.gold_access_price = parseInt(price_);
        $scope.data.access_level = access_level_;
    }


});