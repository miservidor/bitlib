var app = angular.module('myApp', []);

app.config(function($sceDelegateProvider) {
    $sceDelegateProvider.resourceUrlWhitelist([
        'self',
        'https://www.youtube.com/**'
    ]);
});

app.filter('unique', function() {
    return function(collection, keyname) {
        var output = [],
            keys = [];

        angular.forEach(collection, function(item) {
            var key = item[keyname];
            if (keys.indexOf(key) === -1) {
                keys.push(key);
                output.push(item);
            }
        });

        return output;
    };
});

app.controller('myCtrl', function($scope, $http) {
    $scope.name = "Wählen Sie";
    $scope.listarFun = function(nn) {
        $scope.name = nn;
        console.log($scope.name);
    };
    $http({
        method: 'GET',
        url: 'json/videos.json'
    }).then(function successCallback(response) {
        $scope.videos = response.data.videos;
        $scope.getIframeSrc = function(code) {
            return 'https://www.youtube.com/embed/' + code;
        };
        console.log($scope.videos);
        // this callback will be called asynchronously
        // when the response is available
    }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
    });



});
// Simple GET request example: