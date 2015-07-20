var app = angular.module('tenThousandResults', []);

app.controller('downloadCtrl', function ($scope) {
    $scope.data = {
        formVisibility : false,
        numberOfResults : 6072107,
        maxDownloadable : 10000
    }

    $scope.proportionOfResults = function() {
        var percentage = ($scope.data.maxDownloadable / $scope.data.numberOfResults) * 100;
        return percentage;
    }
});
