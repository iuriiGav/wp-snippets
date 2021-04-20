import * as $ from 'jquery';

export const navbarExpandTopToBottom = () => {

if($('.menu-item-has-children').length>0 || $('.ig-dropdown').length>0 ) {
    $('.ig-dropdown-toggle').on('click', e => {
        e.preventDefault();
        console.log('click')
    })
}
 
}