var app = angular.module("myApp", []);

app.service('printPriceService',printPriceService);

app.controller('home', function($scope, $http,printPriceService) {

    //initialing the product price
    var product_cost = 100;
    $scope.total = 0;
    $scope.pins = false;
    // initialing value in service
    printPriceService.setProductCost(product_cost);
    $scope.productCost = printPriceService.getProductCost();
    // getting picture cost from service according to the product cost set 
    $scope.pictureCost = printPriceService.getPictureCost();
    
    //Initializing the image 
    printPriceService.setImageFrameClass('',$scope);
    printPriceService.setImageMatColorClass('',$scope);
    printPriceService.setImageMatHeightWidthClass('',$scope);
    
    //Getting the Tabs from server 
    var req = $http.get('/wp-content/themes/example/category.php');
    req.then(function(data) {

        var res = data.data;
        $scope.tabs = res;
        // debugger;
        printPriceService.setTabs(res);
        

    });

    // Tabs are paper photo,canvas photo etc.if any of the tab is selected then is function is called 
    $scope.selectedTab = function(tab) {
        printPriceService.setTab(tab,$scope);
    }

    // Inside every Tab you steps like print size ,frame ,mat etc.if you select any of the step(category) is selected then is function is called
    $scope.selectedCategory = function (key,category) {
        printPriceService.setCategory(key,category,$scope);
    }

    // Catgory have subcategory.depending upon the subcategory select values change.this subcategory can also have further bifurcation.
    $scope.selectedSubCategory = function (subcategory) {
        printPriceService.setSubCategory(subcategory,$scope);
    }
    
    // This are subcategories which driven from above subcategory
    $scope.selectedCategories = function (categories) {
        printPriceService.setCategories(categories,$scope);
    }

    $scope.selectedSubCategories = function (subcategories) {
        printPriceService.setSubCategories(subcategories,$scope);
    }
    $scope.next = function() {
        printPriceService.getNext($scope);
    }
    $scope.previous = function(){
        printPriceService.getPrevious($scope);
    }


});