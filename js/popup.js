function toggleBodyScrolling(){
    document.body.classList.toggle('hide-scrolling')
}




function filterItems(filterBtn){

    const selectedCategory = filterBtn.getAttribute('data-filter')
    document.querySelectorAll('.portfolio-item').forEach( (item) => {
        const category = item.getAttribute('data-category').split(',')
        if(category.indexOf(selectedCategory) !== -1 || selectedCategory === 'all'){
            item.classList.add('show')
        }
        else{
            item.classList.remove('show')
        }
    })

    portfolioItems = document.querySelectorAll('.portfolio-item.show')
}

filterItems(document.querySelector('.portfolio-filter-btn.active'))


let portfolioItemIndex
document.addEventListener('click', (e) => {
    if(e.target.closest('.portfolio-item')){
        const currenItem = e.target.closest('.portfolio-item')
        portfolioItemIndex = Array.from(portfolioItems).indexOf(currenItem)
        togglePopup()
        portfolioItemDetails()
        updateNextPrevItem()
    }
})


function togglePopup(){
    document.querySelector('.portfolio-popup').classList.toggle('open')
    toggleBodyScrolling(); 
}

document.querySelector('.pp-close-btn').addEventListener('click', togglePopup)


function portfolioItemDetails(){
    document.querySelector('.pp-thumbnail img').src =
    portfolioItems[portfolioItemIndex].querySelector('img').src

    document.querySelector('.pp-header h3').innerHTML =
    portfolioItems[portfolioItemIndex].querySelector('.portfolio-item-title').innerHTML
    
    document.querySelector('.pp-body').innerHTML =
    portfolioItems[portfolioItemIndex].querySelector('.portfolio-item-details').innerHTML




}

function updateNextPrevItem(){
    if(portfolioItemIndex !== 0){
        document.querySelector('.pp-footer-left').classList.remove('hidden')
        document.querySelector('pp-footer-left h3').innerHTML = 
        portfolioItems[portfolioItemIndex-1].querySelector('h3').innerHTML
        
        document.querySelector('pp-footer-left img').src = 
        portfolioItems[portfolioItemIndex-1].querySelector('img').src
    }
    else{
        document.querySelector('.pp-footer-left').classList.add('hidden')

    }
    if(portfolioItemIndex !== portfolioItems.length-1){
        document.querySelector('.pp-footer-right').classList.remove('hidden')
        document.querySelector('pp-footer-right h3').innerHTML = 
        portfolioItems[portfolioItemIndex+1].querySelector('h3').innerHTML
        
        document.querySelector('pp-footer-right img').src = 
        portfolioItems[portfolioItemIndex+1].querySelector('img').src
    }
    else{
        document.querySelector('.pp-footer-left').classList.add('hidden') 
    }
}