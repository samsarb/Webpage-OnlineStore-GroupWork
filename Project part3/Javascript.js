

//this function is to clear filters to be able to filter with other patrs
function clearFilters() {
  var nodeList = document.querySelectorAll('.rightgrid > .searchPage')

  nodeList.forEach(function (el) {
    el.style.display = null
  })
}

//filter by prices between $0-50
function filterProducts1() {
  clearFilters();
  var nodeList = document.querySelectorAll('.rightgrid > .searchPage')
  nodeList.forEach(function (el) {
    var price = el.querySelector('.products p').innerText
    price = parseFloat(price.replace('$', ''))
    if (price >= 50) {
      el.style.display = 'none';
    }
  })

}


//filter by prices between $50-100
function filterProducts2() {
  clearFilters();
  var nodeList = document.querySelectorAll('.rightgrid > .searchPage')
  nodeList.forEach(function (el) {
    var price = el.querySelector('.products p').innerText

    price = parseFloat(price.replace('$', ''))

    if (price < 50 || price >= 100) {
      el.style.display = 'none'
    
    }
    
  })
}

//filter by prices between $100-150
function filterProducts3() {
  clearFilters();
  var nodeList = document.querySelectorAll('.rightgrid > .searchPage')
  nodeList.forEach(function (el) {
    var price = el.querySelector('.products p').innerText

    price = parseFloat(price.replace('$', ''))

    if (price < 100 || price >= 150) {
      el.style.display = 'none'
    }
  })
}


//filter by rating with only one star

function ratefilter(){
  clearFilters();
    var nodeList = document.querySelectorAll('.rightgrid > .searchPage ')
    var nodearray = Array.from(nodeList)
  
    nodearray.forEach(function (el) {
      var stars = el.querySelectorAll('.products > .star > .checked').length;
      if (stars<1 || stars>1){
        el.style.display = 'none'
      }
    })
  }

  //filter by rating with two stars
function ratefilter2(){
  clearFilters();
    var nodeList = document.querySelectorAll('.rightgrid > .searchPage ')
    var nodearray = Array.from(nodeList)

    nodearray.forEach(function (el) {
      var stars = el.querySelectorAll('.products > .star > .checked').length;
      if (stars<2 || stars>2){
        el.style.display = 'none'
      }
    })
  }

  //filter by rating with three stars  
function ratefilter3(){
  clearFilters();
    var nodeList = document.querySelectorAll('.rightgrid > .searchPage ')
    var nodearray = Array.from(nodeList)

    nodearray.forEach(function (el) {
      var stars = el.querySelectorAll('.products > .star > .checked').length;
      if (stars<3 || stars>3){
        el.style.display = 'none'
      }
    })
  }

 //filter by rating with four stars   
function ratefilter4(){
clearFilters();
  var nodeList = document.querySelectorAll('.rightgrid > .searchPage ')
  var nodearray = Array.from(nodeList)

  nodearray.forEach(function (el) {
    var stars = el.querySelectorAll('.products > .star > .checked').length;
    if (stars<4 || stars>4){
      el.style.display = 'none'
    }
  })
}

//filter by rating with five stars
function ratefilter5(){
  clearFilters();
    var nodeList = document.querySelectorAll('.rightgrid > .searchPage ')
    var nodearray = Array.from(nodeList)

  
    nodearray.forEach(function (el) {
      var stars = el.querySelectorAll('.products > .star > .checked').length;
      if (stars<5 || stars>5){
        el.style.display = 'none'
      }
    })
  }

//function for sorting based on prices (from low to high)
  function sortProductslth() {
    var wrapper = document.querySelector('.rightgrid')
    var nodeList = document.querySelectorAll('.rightgrid > .searchPage')
    var productList = Array.from(nodeList)
  
    productList.sort(function (a, b) {
      var priceA = a.querySelector('.products p').innerText
      var priceB = b.querySelector('.products p').innerText
  
      priceA = parseFloat(priceA.replace('$', ''))
      priceB = parseFloat(priceB.replace('$', ''))
  
      return priceA > priceB ? 1 : -1
    })
  
    productList.forEach(function (el) {
      wrapper.append(el)
    })
  }
  
  //function for sorting based on prices (from high to low)
  function sortProductshtl() {
    var wrapper = document.querySelector('.rightgrid');
    var nodeList = document.querySelectorAll('.rightgrid > .searchPage')
    var productList = Array.from(nodeList)
  
    productList.sort(function (a, b) {
      var priceA = a.querySelector('.products p').innerText
      var priceB = b.querySelector('.products p').innerText
  
      priceA = parseFloat(priceA.replace('$', ''))
      priceB = parseFloat(priceB.replace('$', ''))
  
      return priceA > priceB ? -1 : 1
    })
  
    productList.forEach(function (el) {
      wrapper.append(el)
    })
  }



  //function for searching in search page
  
 
  