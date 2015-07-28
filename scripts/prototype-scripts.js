var app = angular.module('tenThousandResults', []);

app.controller('downloadCtrl', function ($scope) {
    $scope.data = {
        formVisibility : false,
        numberOfResults : 6072107,
        maxDownloadable : 1000,
        signedIn : false
    }

    $scope.$watch('data.signedIn', function(newValue) {
        $scope.data.maxDownloadable = (newValue === true) ? 10000 : 1000;
    })

    $scope.proportionOfResults = function() {
        var percentage = ($scope.data.maxDownloadable / $scope.data.numberOfResults) * 100;
        return percentage;
    }
});
