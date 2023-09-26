<!DOCTYPE html>
<html>
<head>
<style>
    /*-----------------------------------------------------------------------------------*/
/* Table of contents

1. Body

2. Header / .header , .header-va1, .header-var2, .header-var2.ext-var4

3. Links Wrapper / .wrapper-links

4. Main Navigation / .wrapper-main-nav

5. Logo / .logo-wrapper

6. Home Slider / .home-slider, .variation-two, .variation-three,

7. Banner / .banner

8. Hot Recipes / .container-hot-recipes, .hot-recipes-var1, .hot-recipes-var2, .hot-recipes-var2.ext-var3

9. Good Food / .good-food, .good-food-var1

10 Our Chefs home / .our-chefs

11. Latest News / .latest-news

12. Recipe Listings / .recipe-listing, .listing-list, .listing-grid

13. Recipe Details / .wrapper-detail-contents

14. Our Chefs / .all-chefs;

15. Sidebar / .side-bar

16. Widgets / .widget

17. Footer / .footer .footer-variant-one
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* Mixin and Variables
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* classes and mixins
/*-----------------------------------------------------------------------------------*/
/*--------------------*/
/* mixins
/*--------------------*/
.placeholder-lora ::-webkit-input-placeholder {
  font-family: 'Lora', serif;
}
.placeholder-lora :-moz-placeholder {
  /* Firefox 18- */
  font-family: 'Lora', serif;
}
.placeholder-lora ::-moz-placeholder {
  /* Firefox 19+ */
  font-family: 'Lora', serif;
}
.placeholder-lora :-ms-input-placeholder {
  font-family: 'Lora', serif;
}
.placeholder-lora-italic ::-webkit-input-placeholder {
  font-family: 'Lora', serif;
  font-style: italic;
}
.placeholder-lora-italic :-moz-placeholder {
  /* Firefox 18- */
  font-family: 'Lora', serif;
  font-style: italic;
}
.placeholder-lora-italic ::-moz-placeholder {
  /* Firefox 19+ */
  font-family: 'Lora', serif;
  font-style: italic;
}
.placeholder-lora-italic :-ms-input-placeholder {
  font-family: 'Lora', serif;
  font-style: italic;
}
.placeholder-lato-bold ::-webkit-input-placeholder {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  color: #514b49;
}
.placeholder-lato-bold :-moz-placeholder {
  /* Firefox 18- */
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  color: #514b49;
}
.placeholder-lato-bold ::-moz-placeholder {
  /* Firefox 19+ */
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  color: #514b49;
}
.placeholder-lato-bold :-ms-input-placeholder {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  color: #514b49;
}
.slick-slide,
.slick-current {
  outline: none;
}
/*--------------------*/
/* heading bottom line
/*--------------------*/
.bottom-line,
.bottom-line-large {
  position: relative;
}
.bottom-line:after,
.bottom-line-large:after {
  content: "";
  height: 3px;
  background: #6ebe3b;
  position: absolute;
  left: 0;
  bottom: -10px;
}
.bottom-line:after {
  width: 30px;
}
.bottom-line-large:after {
  width: 50px;
}
/*--------------------*/
/* font lora
/*--------------------*/
.font-lora {
  font-family: 'Lora', serif;
}
.font-lora-italic {
  font-family: 'Lora', serif;
  font-style: italic;
}
.lora-bold-italic {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
}
.lora-normal-italic {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
}
/*--------------------*/
/* font lato
/*--------------------*/
.font-lato {
  font-family: 'Lato', sans-serif;
}
.lato-bold {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
}
.lato-regular {
  font-family: 'Lato', sans-serif;
  font-weight: 400;
}
.lato-black {
  font-family: 'Lato', sans-serif;
  font-weight: 900;
}
/*--------------------*/
/* font awesome
/*--------------------*/
.font-awesome {
  font-family: FontAwesome;
  display: inline-block;
}
.font-awesome-positioned {
  font-family: FontAwesome;
  display: inline-block;
  position: absolute;
  left: 0;
}
/*--------------------*/
/* font karla
/*--------------------*/
.font-karla {
  font-family: 'Karla', sans-serif;
}
/*--------------------*/
/* font montserrat
/*--------------------*/
.mont-regular {
  font-family: 'Montserrat', sans-serif;
}
/*--------------------*/
/* transitions
/*--------------------*/
.transition-200ms {
  transition: 0.2s all ease-in-out;
}
.transition-300ms {
  transition: 0.3s all ease-in-out;
}
.transition-400ms {
  transition: 0.4s all ease-in-out;
}
.transition-500ms {
  transition: 0.5s all ease-in-out;
}
/*--------------------*/
/* padding off
/*--------------------*/
.padding-right-off {
  padding-right: 0;
}
.padding-left-off {
  padding-left: 0;
}
/*-----------------------------------------------------------------------------------*/
/*common
/*-----------------------------------------------------------------------------------*/
html {
  overflow-x: hidden;
}
body {
  overflow-x: hidden;
}
h1,
h2,
h3,
h4,
h5 {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  color: #000000;
}
h1 a,
h2 a,
h3 a,
h4 a,
h5 a {
  display: inline-block;
}
nav ul {
  display: inline-block;
}
nav li {
  display: inline-block;
}
nav a {
  display: inline-block;
}
a {
  outline: none !important;
  text-decoration: none;
  color: inherit;
  transition: 0.2s all ease-in-out;
}
a:hover {
  text-decoration: none;
}
a:focus {
  text-decoration: none;
  color: inherit;
}
button {
  outline: none;
}
p {
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  font-size: 14px;
  line-height: 24px;
}
ul {
  list-style: none;
  padding-left: 0;
}
.sb-line {
  position: relative;
}
.sb-line:after {
  width: 30px;
  height: 3px;
  content: "";
  display: inline-block;
  position: absolute;
  left: 0;
  bottom: -25px;
}
.lined {
  position: relative;
  overflow: hidden;
}
.lined:after {
  content: "";
  display: inline-block;
  width: 100%;
  height: 1px;
  position: absolute;
  background: #e7e3e1;
  margin-left: 20px;
  margin-top: 15px;
}
/*-----------------------------------------------------------------------------------*/
/* margins
/*-----------------------------------------------------------------------------------*/
.common-mb {
  margin-bottom: 30px;
}
/*-----------------------------------------------------------------------------------*/
/* page loader
/*-----------------------------------------------------------------------------------*/
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #ffffff;
  z-index: 9999999;
  height: 100%;
}
.loadr {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 32px;
  margin: -16px 0 0 -16px;
}
.loadr svg {
  position: relative;
  z-index: 10;
  height: 32px;
  animation: bounce-ldr 1s cubic-bezier(0.51, 0.23, 0.02, 0.96) infinite;
  fill: #6c6;
}
.loadr:after {
  position: absolute;
  bottom: 1px;
  left: 4px;
  display: block;
  width: 22px;
  height: 4px;
  background: rgba(0, 0, 0, 0.1);
  border-radius: 100%;
  animation: shadow 1s infinite;
  content: '';
}
@-webkit-keyframes bounce-ldr {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(0.85, 1.1) translateY(-15px);
  }
}
@-moz-keyframes bounce-ldr {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(0.85, 1.1) translateY(-15px);
  }
}
@-o-keyframes bounce-ldr {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(0.85, 1.1) translateY(-15px);
  }
}
@keyframes bounce-ldr {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(0.85, 1.1) translateY(-15px);
  }
}
@-webkit-keyframes shadow {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(0.7, 1);
    background: rgba(0, 0, 0, 0.05);
  }
}
@-moz-keyframes shadow {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(0.7, 1);
    background: rgba(0, 0, 0, 0.05);
  }
}
@-o-keyframes shadow {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(0.7, 1);
    background: rgba(0, 0, 0, 0.05);
  }
}
@keyframes shadow {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(0.7, 1);
    background: rgba(0, 0, 0, 0.05);
  }
}
.fade-load-left,
.fadeInRight,
.fadeInUp,
.fade-load-down {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
.animation-delay100ms {
  animation-delay: .1s;
}
.animation-delay200ms {
  animation-delay: .2s;
}
.animation-delay300ms {
  animation-delay: .3s;
}
.animation-delay400ms {
  animation-delay: .4s;
}
.animation-delay500ms {
  animation-delay: .5s;
}
.animation-delay600ms {
  animation-delay: .6s;
}
.animation-delay700ms {
  animation-delay: .7s;
}
.animation-delay800ms {
  animation-delay: .8s;
}
.disable-wow {
  animation-duration: 0s !important;
  animation-delay: 0s !important;
}
/*-----------------------------------------------------------------------------------*/
/* buttons
/*-----------------------------------------------------------------------------------*/
.hovered-theme-button {
  height: 40px;
  text-align: center;
  padding-left: 18px;
  padding-right: 18px;
  background: #6ebe3b;
  color: #ffffff;
  font-family: 'Lora', serif;
  font-style: italic;
  font-size: 16px;
}
.button-default {
  height: 40px;
  line-height: 40px;
  text-align: center;
  display: inline-block;
  font-family: 'Lora', serif;
  font-style: italic;
  font-size: 16px;
  min-width: 193px;
  vertical-align: middle;
  margin-right: 5px;
  margin-bottom: 10px;
}
.theme-filled {
  background: #6ebe3b;
  color: #ffffff;
}
.theme-filled:hover {
  background: #000000;
  color: #ffffff;
}
.video-button:before {
  font-family: FontAwesome;
  content: "\f16a";
  font-style: normal;
  margin-right: 10px;
}
.hollow-button {
  border: 1px solid #000000;
}
.hollow-button:hover {
  background: #000000;
  color: #ffffff;
}
.read-more-bordered {
  display: inline-block;
  height: 30px;
  line-height: 28px;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  padding: 0 15px;
  text-transform: capitalize;
  border: 1px solid #000000;
}
.read-more-bordered:hover {
  background: #000000;
  color: #ffffff;
}
.button-dark {
  background: #000000;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  font-size: 16px;
  color: #ffffff;
  display: inline-block;
  height: 40px;
  line-height: 40px;
  padding: 0 36px;
}
.button-dark:hover {
  background: #c1452b;
  color: #ffffff;
}
.read-more-angle {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  font-size: 15px;
}
.read-more-angle:after {
  font-family: FontAwesome;
  content: "\f101";
  font-size: 15px;
  font-style: normal;
  margin-left: 5px;
}
.read-more-angle:hover {
  color: #c1452b;
}
/*-----------------------------------------------------------------------------------*/
/* header
/*-----------------------------------------------------------------------------------*/
.header {
  position: relative;
  z-index: 99999;
}
.header-main {
  padding-top: 20px;
}
.logo-wrapper {
  margin-top: -5px;
}
.logo-wrapper a {
  transition: 0.2s all ease-in-out;
}
.logo-wrapper a:hover {
  opacity: .8;
}
.outer-nav {
  text-align: right;
}
.outer-nav span,
.outer-nav ul,
.outer-nav li,
.outer-nav a {
  display: inline-block;
}
.wrapper-links {
  margin-bottom: 30px;
}
.header-social-icons {
  display: inline-block;
}
.header-social-icons li {
  display: inline-block;
  margin-right: 15px;
  vertical-align: middle;
}
.header-social-icons li a {
  color: #28211f;
  font-size: 18px;
}
.header-social-icons li a:hover {
  color: #6ebe3b;
}
span.sign-in-buttons {
  border: 1px solid #000000;
  display: inline-table;
}
span.sign-in-buttons a {
  padding: 6px 12px;
  color: #28211f;
  font-family: 'Lora', serif;
  display: table-cell;
}
span.sign-in-buttons a:hover {
  background: #000000;
  color: #ffffff;
}
span.sign-in-buttons .login {
  border-right: 1px solid #000000;
}
.nav-collapse > ul {
  margin-bottom: 0;
}
.nav-collapse > ul > li a {
  padding-bottom: 20px;
  padding-top: 20px;
}
.nav-collapse ul {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  font-size: 16px;
  text-transform: capitalize;
}
.nav-collapse ul li {
  margin-left: 28px;
  position: relative;
}
.nav-collapse ul li a {
  color: #000000;
}
.nav-collapse ul li:hover > a {
  color: #6ebe3b;
}
.nav-collapse ul li ul {
  top: 100%;
  display: none;
  opacity: 1;
  visibility: visible;
  position: absolute;
  min-width: 255px;
  background: #6ebe3b;
  z-index: 999;
  left: 0;
  text-align: left;
  padding: 20px 35px;
}
.nav-collapse ul li ul li {
  margin-left: 0;
  display: block;
  border-bottom: 1px solid #57a129;
  position: relative;
}
.nav-collapse ul li ul li a {
  padding-top: 12px;
  padding-bottom: 12px;
  display: block;
  /*   &:hover{
                 color: #ffffff;

               }*/
}
.nav-collapse ul li ul li:hover > a {
  color: #ffffff;
}
.nav-collapse ul li ul li:hover ul {
  top: -20px;
}
.nav-collapse ul li ul li:last-child {
  border-bottom: transparent;
}
.nav-collapse ul li ul li ul {
  top: -20px;
  left: 100%;
}
.nav-collapse ul li ul li ul:before {
  display: none;
}
.nav-collapse ul li ul:before {
  position: absolute;
  display: inline-block;
  content: "";
  border: 5px solid #6ebe3b;
  border-left-color: transparent;
  border-right-color: transparent;
  border-top-color: transparent;
  top: -10px;
  left: 10px;
}
.nav-collapse ul .submit-recipe {
  padding-top: 0;
  padding-bottom: 0;
  color: #ffffff;
}
.nav-collapse ul .submit-recipe:hover {
  background: #000000;
  color: #ffffff;
}
.submit-recipe {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  color: #ffffff;
  background: #6ebe3b;
  height: 40px;
  line-height: 40px;
  text-transform: capitalize;
  font-size: 16px;
  padding: 0 19px;
  display: inline-block;
}
a.mean-expand {
  height: 23px !important;
}
/*--------------------*/
/* responsive nav styles
/*--------------------*/
.nav-collapse li {
  width: auto;
}
/*--------------------*/
/* header variations one
/*--------------------*/
.header-var1 {
  padding-top: 20px;
  padding-bottom: 20px;
}
.header-var1 .responsive-menu {
  display: none !important;
}
.header-var1 .logo-wrapper {
  text-align: center;
}
.header-var1 .logo-wrapper img {
  max-width: 100%;
}
.header-var1 nav > ul {
  display: flex;
  justify-content: space-between;
}
.header-var1 nav > ul > li {
  margin-left: 0;
}
.header-var1 nav > ul > li > a {
  padding: 12px 0;
  border-bottom: 2px inset transparent;
  transition: none;
}
.header-var1 nav > ul > li > a:hover {
  color: #6ebe3b;
}
.header-var1 nav > ul > li.current-menu-item {
  color: #000000;
  font-weight: 700;
  border-color: #000000;
}
.header-var1 .nav-collapse ul li ul {
  top: 96%;
}
.header-var1 .left-nav nav {
  margin-top: 50px;
}
.header-var1 .right-nav .wrapper-links {
  text-align: right;
  margin-bottom: 11px;
}
.header-var1 .right-nav .submit-recipe {
  color: #000000;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  background: transparent !important;
  line-height: inherit;
  padding: 12px 0;
  height: auto;
  position: relative;
  border-color: #6ebe3b;
  transition: 0.2s all ease-in-out;
}
.header-var1 .right-nav .submit-recipe:hover {
  background: transparent;
  color: #6ebe3b;
}
/*--------------------*/
/* header variation two
/*--------------------*/
.header-main .nav-collapse ul .submit-recipe {
  font-family: 'Lora', serif;
  font-style: italic;
  color: #ffffff ;
  background: #6ebe3b;
  height: 40px;
  line-height: 40px;
  text-transform: capitalize;
  font-size: 16px;
  padding: 0 15px;
  display: inline-block;
}
.header-main .nav-collapse ul .submit-recipe:hover {
  background: #000000;
}
.header-main.header-var2 .submit-recipe {
  color: #000000 !important;
  background: transparent !important;
  font-weight: 700;
  padding: 0 !important;
  border-bottom: 2px inset #6ebe3b;
}
.header-main.header-var2 .submit-recipe:hover {
  border-color: #000000;
}
.header-main.header-var2 .nav-collapse ul ul {
  box-shadow: 0 0 10px -2px #000000;
}
.submit-recipe-filled {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  color: #ffffff !important;
  background: #6ebe3b;
  height: 40px;
  line-height: 40px;
  text-transform: capitalize;
  font-size: 16px;
  padding: 0 19px !important;
  display: inline-block;
}
.submit-recipe-filled:hover {
  color: #ffffff !important;
  background: #000000;
}
.submit-recipe-lined {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  color: #000000 !important;
  background: transparent;
  height: 40px;
  line-height: 40px;
  text-transform: capitalize;
  font-size: 16px;
  padding: 0 !important;
  display: inline-block;
  border-bottom: 2px inset #6ebe3b;
}
.submit-recipe-lined:hover {
  color: #000000 !important;
  border-color: #000000;
}
/*--------------------*/
/* header variation three
/*--------------------*/
.wrapper-logo-banner {
  padding: 12px 0;
}
.wrapper-logo-banner .welcome-line p {
  margin-top: 5px;
  font-family: 'Lora', serif;
  font-style: italic;
  font-size: 16px;
  color: #000000;
}
.wrapper-logo-banner .wrapper-links {
  margin-bottom: 0;
  text-align: right;
}
.wrapper-logo-banner .banner-header img {
  width: 100%;
  transition: 0.2s all ease-in-out;
}
.wrapper-logo-banner .banner-header img:hover {
  opacity: .8;
}
.top-nav {
  background: #6ebe3b;
}
.top-nav ul {
  display: block;
  margin-bottom: 0;
}
.top-nav ul li {
  display: inline-block;
  margin-right: 35px;
  position: relative;
  text-transform: capitalize;
}
.top-nav ul li a {
  display: inline-block;
  line-height: 66px;
  vertical-align: middle;
  font-family: 'Lora', serif;
  font-style: italic;
  font-size: 16px;
}
.top-nav ul li:hover > a {
  color: #ffffff;
}
.top-nav ul li ul {
  display: none;
  position: absolute;
  left: 0;
  z-index: 666;
  min-width: 255px;
  background: #5eaa2e;
  padding: 20px 35px;
}
.top-nav ul li ul li {
  display: block;
  margin-right: 0;
  width: auto !important;
  border-bottom: 1px solid #57a129;
}
.top-nav ul li ul li a {
  line-height: normal;
  padding: 12px 0;
}
.top-nav ul li ul li:hover > a {
  color: #ffffff;
  font-weight: 400;
}
.top-nav ul li ul li:last-child {
  border-bottom: none;
}
.top-nav ul li ul li ul {
  left: 100%;
  top: 0;
}
.top-nav ul li.current-menu-item {
  font-weight: 700;
}
.top-nav ul .submit-recipe {
  float: right;
  margin-right: 0;
  padding: 0;
}
.top-nav ul .submit-recipe a {
  padding: 0 30px;
  background: #65ae36;
}
.top-nav ul .submit-recipe a:hover {
  background: #000000;
}
/*--------------------*/
/* header variation four
/*--------------------*/
.header-var2.ext-var4 .submit-recipe a {
  background: #000000;
}
.header-var2.ext-var4 .submit-recipe a:hover {
  background: #65ae36;
  color: #ffffff;
}
.header-var2.ext-var4 nav ul > li a {
  color: #ffffff;
}
.header-var2.ext-var4 nav ul > li a:hover {
  color: #000000;
}
.header-var2 .wrapper-logo-banner {
  padding-bottom: 11px;
}
.header-var2.variation-four .logo-wrapper,
.header-var2.ext-var4 .logo-wrapper {
  margin-top: 10px;
}
.header-var2.variation-four .wrapper-links,
.header-var2.ext-var4 .wrapper-links {
  margin-bottom: 5px;
}
/*-----------------------------------------------------------------------------------*/
/* header ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* slider
/*-----------------------------------------------------------------------------------*/
.slick-slider {
  margin-bottom: 0;
}
.custom-margin {
  margin-bottom: 0;
}
.slider-box {
  display: flex;
}
.slider-left {
  width: 66%;
  height: 523px;
  position: relative;
}
.slider-left img {
  width: 100%;
}
.custom-arrows {
  display: table;
  position: absolute;
  top: 50%;
  margin-top: -32px;
  left: -39px;
}
.custom-arrows span {
  display: table-cell;
  height: 65px;
  width: 39px;
  line-height: 65px;
  text-align: center;
  cursor: pointer;
  user-select: none;
  transition: 0.2s all ease-in-out;
  background: #3d3432;
}
.custom-arrows span:hover {
  background: #28211f;
}
.custom-arrows span i {
  color: #736e6b;
}
.slider-right {
  height: 523px;
  overflow: hidden;
  position: relative;
  width: 34%;
  background: #ddecf3;
}
.slider-right .slide-detail {
  height: 523px;
}
.wrapper-home-slider {
  margin-bottom: 30px;
}
.wrapper-home-slider h2 {
  margin-top: 0;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  font-size: 30px;
  line-height: 36px;
  color: #000000;
  margin-bottom: 30px;
}
.wrapper-home-slider h2 a {
  transition: 0.2s all ease-in-out;
}
.wrapper-home-slider h2 a:hover {
  color: #5eaa2e;
}
.home-slider {
  position: relative;
}
.corner-image {
  position: absolute;
  z-index: -1;
  user-select: none;
}
.corner-image.slider {
  right: -407px;
  bottom: -180px;
}
.corner-image.hot {
  left: -207px;
  bottom: -80px;
}
.food-category {
  padding: 10px 19px;
  background: #b6754b;
  color: #ffffff;
  text-transform: uppercase;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  font-size: 14px;
  display: inline-block;
  margin-bottom: 30px;
}
.food-category:hover {
  background: #000000;
  color: #ffffff;
}
.post-meta {
  margin-bottom: 58px;
}
.post-meta li {
  padding-left: 20px;
  margin-right: 10px;
  position: relative;
  display: inline-block;
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  color: #5e676b;
  line-height: 24px;
}
.post-meta li a:hover {
  color: #5eaa2e;
}
.post-meta li:before {
  font-family: FontAwesome;
  display: inline-block;
  position: absolute;
  left: 0;
}
.post-meta .author-o:before {
  content: "\f007";
}
.post-meta .author:before {
  content: "\f007";
}
.post-meta .type:before {
  content: "\f080";
}
.post-meta .time:before {
  content: "\f017";
}
.post-meta .date:before {
  content: "\f073";
}
.post-meta .calendar:before {
  content: "\f133";
}
.post-meta .comments:before {
  content: "\f0e5";
}
.post-meta.slider-rating {
  position: relative;
  margin-bottom: 44px;
}
.post-meta.slider-rating:after {
  content: "";
  width: 50px;
  height: 3px;
  background: #6ebe3b;
  position: absolute;
  left: 0;
  bottom: -15px;
}
.fbox {
  display: flex;
  flex-direction: column;
}
.box1 {
  padding: 45px 30px 62px 30px;
}
.box2 {
  position: absolute;
  width: 100%;
  height: 62px;
  bottom: 0;
}
/*--------------------*/
/* slider variation one
/*--------------------*/
.wrapper-home-slider.variation-one .slider-left {
  position: relative;
}
.wrapper-home-slider.variation-one .slider-left .featured {
  height: 38px;
  line-height: 38px;
  text-transform: uppercase;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  color: #ffffff;
  display: inline-block;
  position: absolute;
  top: 50px;
  background: #b6754b;
  padding: 0 20px;
}
.wrapper-home-slider.variation-one .rating-box {
  padding-left: 0;
  padding-right: 0;
}
.wrapper-home-slider.variation-one .box1 {
  padding-bottom: 170px;
}
.slider-right .slide-detail {
  position: relative;
}
.slider-right .similar-recipes {
  background: #d5e3ea;
  text-align: center;
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
}
.slider-right .similar-recipes li {
  width: 25%;
  text-align: center;
  display: inline-block;
}
.slider-right .similar-recipes li a {
  display: inline-block;
  transition: 0.2s all ease-in-out;
}
.slider-right .similar-recipes li a:hover {
  opacity: .8;
}
.slider-right .similar-recipes li img {
  max-width: 100%;
}
.slider-right .similar-recipes span {
  text-transform: uppercase;
  background: #ffffff;
  display: inline-block;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  font-size: 14px;
  padding: 6px 13px;
  position: relative;
  top: -16px;
}
.slide-detail .icon-container {
  vertical-align: middle;
}
.slide-detail .icon-svg {
  fill: #6ebe3b;
}
/*--------------------*/
/* Slider variation two
/*--------------------*/
.wrapper-home-slider .slick-dots {
  bottom: 20px;
}
.wrapper-home-slider .slick-dots li {
  margin: 0 2px;
}
.wrapper-home-slider .slick-dots li button:before {
  font-size: 12px;
  opacity: 1;
  color: #ffffff;
  border: 2px solid transparent;
  line-height: 14px;
  width: 15px;
  height: 16px;
  border-radius: 50%;
}
.wrapper-home-slider .slick-dots li.slick-active button:before {
  color: #000000;
  border-color: #ffffff;
  background-color: #ffffff;
}
.wrapper-home-slider.variation-two {
  margin-bottom: 0;
}
.wrapper-home-slider.variation-two .custom-container-slide {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}
.wrapper-home-slider.variation-two .slide-detail {
  background: #ffffff;
  padding: 16px;
  width: 410px;
}
.wrapper-home-slider.variation-two .slide-detail-inner {
  border: 1px solid #e4d9d1;
  padding: 35px;
}
.wrapper-home-slider.variation-two .slide-detail-inner h2 {
  font-size: 30px;
  font-family: 'Lato', sans-serif;
  font-weight: 900;
  font-style: normal;
  text-transform: uppercase;
  margin-bottom: 20px;
}
.wrapper-home-slider.variation-two .slide-detail-inner p {
  font-family: 'Karla', sans-serif;
  margin-bottom: 20px;
}
.wrapper-home-slider.variation-two .slide-detail-inner .read-more-bordered {
  margin-top: 15px;
}
.wrapper-home-slider.variation-two .slide-detail-inner .rating-box {
  margin-bottom: 5px;
}
.wrapper-home-slider.variation-two .slide-detail-inner .rating-box .rating-figure {
  display: inline-block;
  margin-top: 12px;
  margin-left: 0;
}
.wrapper-home-slider.variation-two .slick-slide img {
  width: 100%;
}
.wrapper-home-slider.variation-two .short-separator {
  margin-bottom: 10px;
}
.short-separator {
  width: 50px;
  height: 3px;
  background: #6ebe3b;
  margin: auto;
}
/*--------------------*/
/*slider variation 3
/*--------------------*/
.wrapper-home-slider.variation-three-boxed {
  margin-bottom: 30px;
}
.wrapper-home-slider.variation-three-boxed .box-slider-var3 .slide-detail {
  margin-right: 75px;
}
.box-slider-var3-outer {
  position: relative;
}
.bg-corner-slider-var3 {
  right: -316px;
  bottom: -100px;
}
/*--------------------*/
/* recipe detail slider
/*--------------------*/
.slider-detail img,
.slider-nav img {
  width: 100%;
}
/*-----------------------------------------------------------------------------------*/
/* slider ends
/*-----------------------------------------------------------------------------------*/
.rating-box {
  width: 100%;
  padding-top: 20px;
  padding-bottom: 20px;
  padding-left: 25px;
  padding-right: 25px;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  color: #000000;
  line-height: 21px;
}
.rating-box span {
  display: inline-block;
  vertical-align: middle;
}
.rating-box .rating-figure {
  margin-left: 10px;
  padding-top: 3px;
}
.rating-slider {
  background: #d3e5ed;
}
.fluid-search-slider {
  background: linear-gradient(to right, #5eaa2e 50%, #6ebe3b 50%);
}
.fluid-search-slider .wrapper-search-bar {
  margin-bottom: 0;
}
.wrapper-search-bar {
  margin-bottom: 30px;
}
.search-bar {
  background: #6ebe3b;
  overflow: hidden;
}
.search-bar .search-box-home {
  display: inline-block;
}
.search-bar .search-box-home ::-webkit-input-placeholder {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
}
.search-bar .search-box-home :-moz-placeholder {
  /* Firefox 18- */
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
}
.search-bar .search-box-home ::-moz-placeholder {
  /* Firefox 19+ */
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
}
.search-bar .search-box-home :-ms-input-placeholder {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
}
.search-bar .search-box-home .slider-search-left {
  color: #ffffff;
  font-size: 16px;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  position: relative;
  margin-bottom: 0;
  margin-top: 4px;
}
.search-bar .search-box-home input {
  display: inline-block;
  margin-left: 10px;
  outline: none;
  border: none;
  height: 34px;
  color: #798287;
  padding-left: 10px;
  padding-right: 34px;
}
.search-bar .search-box-home input:focus {
  outline: none;
  border: none;
}
.search-bar .search-box-home button {
  position: absolute;
  right: 0;
  top: 0;
  height: 34px;
  background: transparent;
  border: none;
  color: #000000;
}
.flexed-centered {
  height: 40px;
  width: 100%;
}
.search-box {
  background: #5eaa2e;
  height: 66px;
  padding-left: 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.wrapper-search-carousel {
  padding-left: 1px;
}
.search-carousel .slide {
  text-align: center;
  border-right: 1px solid #67b238;
}
.search-carousel a {
  display: block;
  height: 66px;
  line-height: 66px;
  vertical-align: middle;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  font-size: 16px;
  color: #33571c;
  text-transform: capitalize;
  transition: 0.2s all ease-in-out;
}
.search-carousel a:hover {
  color: #ffffff;
}
.search-carousel a:hover .icon-svg {
  fill: #ffffff;
}
.search-carousel span {
  display: inline-block;
  margin-right: 10px;
}
.search-carousel span img {
  display: inline-block;
}
.search-carousel .icon-container {
  vertical-align: middle;
}
.search-carousel .icon-svg {
  fill: #4C8924;
  transition: 0.2s all ease-in-out;
}
.search-box {
  position: relative;
  margin-right: 8px;
}
.search-box:after {
  content: "";
  width: 25px;
  height: 86px;
  background: #5eaa2e;
  position: absolute;
  right: -10px;
  top: -10px;
  transform: rotate(20deg);
}
.search-option span {
  display: inline-block;
  font-family: 'Lora', serif;
  font-style: italic;
  font-size: 16px;
  color: #ffffff;
  height: 34px;
  width: 34px;
  background: #000000;
  position: relative;
  z-index: 2;
  border-radius: 34px;
  text-align: center;
  line-height: 34px;
  margin-right: -27px;
}
/*-----------------------------------------------------------------------------------*/
/* hot recipes
/*-----------------------------------------------------------------------------------*/
.bg-color1 {
  background-color: #f4f1ea;
}
.bg-color1:before {
  background-color: #f4f1ea;
}
.bg-color2 {
  background-color: #ddecf3;
}
.bg-color2:before {
  background-color: #ddecf3;
}
.bg-color3 {
  background-color: #f6e3df;
}
.bg-color3:before {
  background-color: #f6e3df;
}
.bg-color4 {
  background-color: #e2f0cd;
}
.bg-color4:before {
  background-color: #e2f0cd;
}
.bg-color5 {
  background-color: #fffbe5;
}
.bg-color5:before {
  background-color: #fffbe5;
}
.col-size {
  height: 368px;
  width: 50%;
}
.wrapper-hot-recipes {
  margin-bottom: 110px;
}
.container-tags {
  overflow: hidden;
  position: relative;
  z-index: 66666;
}
.container-tags .tag {
  display: inline-table;
  padding-right: 20px;
  overflow: hidden;
}
.container-tags .tag-inner {
  display: inline-block;
  height: 46px;
  line-height: 46px;
  text-align: center;
  padding: 0 19px;
  background-color: #c1452b;
  color: #ffffff;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  font-size: 18px;
  position: relative;
}
.container-tags .tag-inner:before {
  content: "";
  width: 20px;
  height: 56px;
  display: inline-block;
  background: #c1452b;
  transform: rotate(-17deg);
  position: absolute;
  right: -8px;
}
.container-tags ul {
  padding-top: 10px;
  display: inline-block;
  float: right;
  margin-bottom: 0;
}
.container-tags ul li {
  display: inline-block;
  margin-left: 30px;
}
.container-tags ul li a {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  color: #000000;
  font-size: 16px;
}
.container-tags ul li a:hover {
  color: #c1452b;
}
.container-hot-recipes {
  clear: both;
  position: relative;
}
.hot-row {
  display: flex;
  flex-wrap: wrap;
  overflow: hidden;
}
.full-image img {
  width: 100%;
  height: 100%;
}
.full-image a {
  display: block;
  height: 100%;
}
.full-image figure {
  position: relative;
  height: 100%;
  overflow: hidden;
}
.full-image figure img {
  transition: 0.2s all ease-in-out;
}
.full-image figure:hover img {
  transform: scale(1.05);
}
.full-image figure:hover figcaption {
  background-color: rgba(103, 178, 56, 0.7);
}
.full-image figure figcaption {
  position: absolute;
  bottom: 0;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  color: #ffffff;
  font-size: 24px;
  padding: 18px 30px;
  transition: 0.2s all ease-in-out;
}
.split-images-inner {
  display: flex;
  flex-direction: column;
  height: 368px;
}
.recipe-box {
  display: flex;
  width: 100%;
}
.recipe-box:hover .image img {
  transform: scale(1.05);
}
.recipe-box .intro {
  width: 50%;
}
.recipe-box .image {
  width: 50%;
  overflow: hidden;
}
.recipe-box .image img {
  width: 100%;
  transition: 0.2s all ease-in-out;
}
.recipe-box p {
  margin-bottom: 0;
  color: #918c82;
}
.image-first .recipe-box .intro {
  order: 2;
}
.image-first .recipe-box .image {
  order: 1;
}
.intro .heading-recipe {
  padding: 0 30px;
}
.intro h3 {
  margin-top: 30px;
  line-height: 30px;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  font-size: 21px;
  position: relative;
}
.intro h3:after {
  content: "";
  width: 30px;
  height: 3px;
  background: #6ebe3b;
  position: absolute;
  left: 0;
  bottom: -15px;
}
.intro h3 a:hover {
  color: #000000;
}
.intro-first,
.image-first {
  display: flex;
}
.intro-first .intro,
.image-first .intro {
  position: relative;
}
.intro-first .intro:before,
.image-first .intro:before {
  z-index: 999;
  content: "";
  display: inline-block;
  width: 26px;
  height: 26px;
  position: absolute;
  transform: rotate(45deg);
  top: 40px;
}
.intro-first .intro:before {
  right: -12px;
}
.image-first .intro:before {
  left: -12px;
}
.post-meta.recipe {
  margin-top: 30px;
  margin-bottom: 20px;
}
.post-meta.recipe li {
  padding-left: 18px;
  margin-right: 6px;
}
.post-meta.recipe:before {
  display: none;
}
.bg-color1 h3:after {
  background: #d6b76e;
}
.bg-color1 h3:hover a {
  color: #d6b76e;
}
.bg-color1 .icon-svg {
  fill: #d6b76e;
}
.bg-color2 h3:after {
  background: #65adcf;
}
.bg-color2 h3:hover a {
  color: #65adcf;
}
.bg-color2 .icon-svg {
  fill: #65adcf;
}
.bg-color4 h3:after {
  background: #9cc55d;
}
.bg-color4 h3:hover a {
  color: #9cc55d;
}
.bg-color4 .icon-svg {
  fill: #9cc55d;
}
.bg-color3 h3:after {
  background: #cd715d;
}
.bg-color3 h3:hover a {
  color: #cd715d;
}
.bg-color3 .icon-svg {
  fill: #cd715d;
}
.bg-color5 h3:after {
  background: #c6b65c;
}
.bg-color5 h3:hover a {
  color: #c6b65c;
}
.bg-color5 .icon-svg {
  fill: #c6b65c;
}
/*--------------------*/
/* hot recipes variation one
/*--------------------*/
.heading-var1 {
  padding-bottom: 40px;
}
.heading-var1 h2 {
  margin-top: 40px;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  font-size: 30px;
  color: #000000;
}
.icon-container {
  vertical-align: middle;
}
.heading-bell {
  display: inline-block;
}
.heading-bell img {
  width: auto !important;
  max-width: 100% !important;
}
.heading-bell:before,
.heading-bell:after {
  content: "";
  display: inline-block;
  width: 70px;
  height: 1px;
  background: #dddad2;
}
.heading-bell:before {
  margin-right: 15px;
}
.heading-bell:after {
  margin-left: 15px;
}
.heading-bell.boxed {
  margin-bottom: 15px;
}
.heading-bell .icon-svg {
  fill: #c6b65c;
}
.single-recipe .recipe-image {
  overflow: hidden;
}
.single-recipe .recipe-image img {
  width: 100%;
  transition: 0.2s all ease-in-out;
}
.single-recipe:hover .recipe-detail {
  background: rgba(185, 132, 79, 0.19);
}
.single-recipe:hover .recipe-image img {
  transform: scale(1.05);
}
.single-recipe .recipe-detail {
  padding: 30px;
  background: #f8f6f1;
  overflow: hidden;
  min-height: 310px;
  transition: 0.2s all ease-in-out;
}
.single-recipe .recipe-detail h3 {
  margin-top: 0;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  font-size: 21px;
  line-height: 30px;
}
.single-recipe .recipe-detail h3 a:hover {
  color: #c1452b;
}
.single-recipe .recipe-detail p {
  font-family: 'Karla', sans-serif;
  color: #000000;
}
.single-recipe .read-more-bordered {
  margin-top: 20px;
}
/*--------------------*/
/* hot recipes variation two
/*--------------------*/
.hot-recipes-var2 {
  padding-top: 40px;
  padding-bottom: 110px;
  background: #f8f6f5;
}
.hot-recipes-var2 h1,
.hot-recipes-var2 h2,
.hot-recipes-var2 h3 {
  font-family: 'Lato', sans-serif;
  font-weight: 900;
  font-style: normal;
  text-transform: uppercase;
}
.hot-recipes-var2 .col-size {
  height: auto;
}
.hot-recipes-var2 .split-images-var2 .image img {
  width: 100%;
}
.hot-recipes-var2 .split-images-var2 .common-split {
  width: 50%;
}
.hot-recipes-var2 .split-images-var2:hover .intro {
  background: #5eaa2e;
}
.hot-recipes-var2 .split-images-var2:hover .intro .intro-inner {
  background: #5eaa2e;
}
.hot-recipes-var2 .split-images-var2:hover .intro .intro-inner h3,
.hot-recipes-var2 .split-images-var2:hover .intro .intro-inner p,
.hot-recipes-var2 .split-images-var2:hover .intro .intro-inner .read-more {
  color: #ffffff;
}
.hot-recipes-var2 .split-images-var2:hover .intro .intro-inner .short-separator {
  background: #ffffff;
}
.hot-recipes-var2 .split-images-var2:hover .intro .intro-inner .read-more:hover:after {
  padding-left: 10px;
  opacity: 1;
  visibility: visible;
}
.hot-recipes-var2 .intro {
  display: flex;
  color: #000000;
  background: #ffffff;
  padding: 10px;
  transition: 0.2s all ease-in-out;
}
.hot-recipes-var2 .intro:before {
  display: none;
}
.hot-recipes-var2 .intro .intro-inner {
  padding: 10px;
  border: 1px solid #e4d9d1;
  transition: 0.2s all ease-in-out;
  width: 100%;
}
.hot-recipes-var2 .intro h3 {
  font-size: 16px;
  line-height: 30px;
  margin-top: 10px;
}
.hot-recipes-var2 .intro h3:after {
  display: none;
}
.hot-recipes-var2 .intro p {
  font-family: 'Karla', sans-serif;
}
.hot-recipes-var2 .intro .short-separator {
  margin-bottom: 10px;
}
.hot-recipes-var2 .intro .read-more {
  display: inline-block;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  text-transform: capitalize;
  position: relative;
}
.hot-recipes-var2 .intro .read-more:hover {
  color: #c1452b;
}
.hot-recipes-var2 .intro .read-more:after {
  font-family: FontAwesome;
  content: "\f061";
  font-style: normal;
  padding-left: 0;
  opacity: 0;
  position: absolute;
  visibility: hidden;
  color: #ffffff;
}
.hot-recipes-var2 .intro h3,
.hot-recipes-var2 .intro p,
.hot-recipes-var2 .intro .read-more,
.hot-recipes-var2 .intro .short-separator,
.hot-recipes-var2 .intro .read-more:after {
  transition: 0.2s all ease-in-out;
}
.hot-recipes-var2 .intro-first .image {
  order: 2;
}
.hot-recipes-var2.corner-bg-var {
  background: transparent;
  padding-top: 30px;
}
.hot-recipes-var2.corner-bg-var .intro {
  background: #f4f0ee;
}
.hot-recipes-var2.corner-bg-var .intro .intro-inner {
  background: #ffffff;
}
.hot-recipes-var2.corner-bg-var .corner-image.hot {
  left: -307px;
  bottom: -124px;
}
.wrapper-hot-recipe-var2 {
  position: relative;
}
/*--------------------*/
/* hot recipe var3
/*--------------------*/
.hot-recipes-var2.ext-var3 {
  padding-top: 0px;
}
/*-----------------------------------------------------------------------------------*/
/* hot recipes ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* good food home page
/*-----------------------------------------------------------------------------------*/
.good-food {
  margin-bottom: 80px;
}
.good-food-box {
  display: flex;
}
.text-side {
  width: 42%;
}
.image-side {
  width: 58%;
  display: flex;
  align-items: flex-end;
}
.good-food-intro .heading-small,
.good-food-intro h2 {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  color: #000000;
}
.good-food-intro .heading-small {
  font-size: 24px;
}
.good-food-intro h2 {
  margin-bottom: 25px;
  margin-top: 0;
  font-size: 48px;
  position: relative;
}
.good-food-intro h2:after {
  content: "";
  width: 30px;
  height: 3px;
  background: #6ebe3b;
  position: absolute;
  left: 0;
  bottom: -15px;
}
.good-food-intro .emphasis {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  font-size: 21px;
  line-height: 30px;
  color: #3d8f09;
  margin-bottom: 15px;
  display: inline-block;
}
.good-food-image img {
  width: 100%;
}
.good-food-list {
  margin-bottom: 25px;
}
.good-food-list li {
  color: #68645d;
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  font-size: 15px;
  display: block;
  border-bottom: 1px solid #efeeee;
  padding: 15px 0;
  position: relative;
  padding-left: 55px;
}
.good-food-list li:last-child {
  border: none;
}
.good-food-list li span {
  position: absolute;
  display: inline-block;
  left: 0;
  top: 10px;
  min-height: 40px;
}
.good-food-list li a {
  display: inline-block;
}
.good-food-list li a:hover {
  color: #5eaa2e;
}
/*--------------------*/
/* good food variation 1
/*--------------------*/
.good-food-var1 .wrapper-good-food {
  background: #f8f6f1;
  border-top: 2px solid #000000;
  margin-top: 30px;
  padding-top: 60px;
  padding-bottom: 60px;
}
.good-food-var1 .single-item {
  margin-bottom: 20px;
  padding: 10px 30px;
}
.good-food-var1 .food-icon {
  display: inline-block;
  width: 82px;
  height: 82px;
  line-height: 80px;
  text-align: center;
  border: 1px solid #68645d;
  border-radius: 50%;
}
.good-food-var1 h2 {
  font-size: 36px;
  margin-top: 10px;
}
.good-food-var1 .heading-small {
  font-size: 24px;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  color: #000000;
}
.good-food-var1 h3 {
  font-size: 18px;
  margin-top: 30px;
}
.good-food-var1 h3 a:hover {
  color: #5eaa2e;
}
.good-food-var1 p {
  font-family: 'Karla', sans-serif;
}
/*-----------------------------------------------------------------------------------*/
/* good food ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* our chefs
/*-----------------------------------------------------------------------------------*/
.wrapper-chefs {
  display: flex;
  position: relative;
  margin-bottom: 45px;
}
.our-chefs .chef-single {
  overflow: hidden;
  transition: 0.2s all ease-in-out;
  width: 25%;
}
.our-chefs .chef-single img {
  width: 100%;
  transition: 0.2s all ease-in-out;
}
.our-chefs .chef-single .chef-intro {
  padding: 15px 25px;
}
.our-chefs .chef-single .chef-intro h4 {
  font-size: 21px;
  color: #ffffff;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
}
.our-chefs .chef-single .chef-intro h4 a {
  transition: 0.2s all ease-in-out;
}
.our-chefs .chef-single .chef-intro h4 a:hover {
  color: #ffffff;
  opacity: .7;
}
.our-chefs .chef-single .chef-intro span {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  font-size: 13px;
  line-height: 30px;
  text-transform: uppercase;
  transition: 0.2s all ease-in-out;
}
.our-chefs .chef-single:hover {
  background: #c1452b;
}
.our-chefs .chef-single:hover img {
  transform: scale(1.08);
}
.our-chefs .chef-single:hover span {
  color: #F6F6F6;
}
.bg-colorA {
  background: #68645d;
}
.bg-colorA span {
  color: #a5a094;
}
.bg-colorB {
  background: #79756e;
}
.bg-colorB span {
  color: #bfbaaf;
}
.bg-colorC {
  background: #949088;
}
.bg-colorC span {
  color: #bfbaaf;
}
.bg-colorD {
  background: #a8a49d;
}
.bg-colorD span {
  color: #d8d4cb;
}
.chef-bg {
  right: -317px;
  bottom: -103px;
}
/*--------------------*/
/* our chefs variation 1
/*--------------------*/
.homo-4-col h3 {
  margin-top: 35px;
  font-size: 18px;
  margin-bottom: 15px;
}
.homo-4-col .graphic-box {
  transition: 0.2s all ease-in-out;
}
.homo-4-col .graphic-box img {
  width: 100%;
}
.homo-4-col p {
  font-family: 'Karla', sans-serif;
  margin-bottom: 15px;
}
.homo-4-col .chef-designation {
  display: inline-block;
  text-transform: uppercase;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  font-size: 13px;
}
.homo-4-col .col-single {
  padding-bottom: 20px;
}
.homo-4-col .col-single:hover .chef-image {
  opacity: .8;
}
.homo-4-col .col-single:hover .graphic-box {
  opacity: .8;
}
.homo-4-col .post-meta {
  margin-bottom: 30px;
}
.homo-4-col .post-meta li {
  color: #000000;
}
/*-----------------------------------------------------------------------------------*/
/* our chefs ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* our chefs page
/*-----------------------------------------------------------------------------------*/
.wrapper-main-contents.all-chefs {
  padding-top: 40px;
}
.line-heading {
  overflow: hidden;
}
.line-heading h2 {
  margin-bottom: 50px;
  position: relative;
  font-size: 24px;
}
.line-heading h2:after {
  margin-left: 20px;
  display: inline-block;
  content: "";
  width: 100%;
  height: 1px;
  background: #e7e3e1;
  position: absolute;
  top: 50%;
  margin-top: 3px;
}
.all-chefs .wrapper-head-chef {
  position: relative;
}
.all-chefs .bg-corner-head-chef {
  position: absolute;
  right: -232px;
  bottom: -60px;
  z-index: 1;
}
.all-chefs .head-chef {
  position: relative;
  z-index: 2;
  display: flex;
  margin-bottom: 60px;
}
.all-chefs .head-chef .left-side {
  display: flex;
  flex-direction: column-reverse;
  background: #ffffff;
  width: 42%;
}
.all-chefs .head-chef .left-side img {
  max-width: 100%;
}
.all-chefs .head-chef .right-side {
  padding: 30px 50px;
  width: 58%;
  background: #3f3c37;
}
.all-chefs .head-chef .right-side h3 {
  font-size: 30px;
  color: #ffffff;
}
.all-chefs .head-chef .right-side h3 a:hover {
  color: #6ebe3b;
}
.all-chefs .head-chef .right-side .type {
  text-transform: uppercase;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  font-size: 13px;
  color: #9d9a95;
  display: block;
  margin-bottom: 20px;
}
.all-chefs .head-chef .right-side .expertise {
  display: inline-block;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  text-transform: uppercase;
}
.all-chefs .head-chef .right-side .expertise li {
  margin-right: 25px;
  display: inline-block;
  font-size: 13px;
  color: #9d9a95;
  margin-bottom: 25px;
}
.all-chefs .head-chef .right-side .expertise li a {
  display: inline-block;
}
.all-chefs .head-chef .right-side .expertise li a:hover {
  color: #ffffff;
}
.all-chefs .head-chef .right-side .expertise li a:hover .icon-svg {
  fill: #ffffff;
}
.all-chefs .head-chef .right-side .expertise li img {
  vertical-align: bottom;
  margin-right: 5px;
}
.all-chefs .head-chef .right-side .expertise:before {
  display: inline-block;
  content: "experts in:";
  text-transform: uppercase;
  color: #ffffff;
  margin-right: 10px;
  margin-bottom: 25px;
}
.all-chefs .head-chef .right-side .expertise .icon-container {
  vertical-align: -14px;
}
.all-chefs .head-chef .right-side .expertise .icon-svg {
  fill: #9d9a95;
  transition: 0.2s all ease-in-out;
}
.all-chefs .head-chef .right-side .separator-chef {
  width: 100%;
  height: 1px;
  background: #4c4944;
  margin-bottom: 25px;
}
.all-chefs .head-chef .right-side p {
  color: #9d9a95;
  font-size: 16px;
  line-height: 30px;
}
.social-icons-chef {
  vertical-align: top;
  display: inline-block;
  float: right;
}
.social-icons-chef li {
  display: table-cell;
}
.social-icons-chef li a {
  display: inline-block;
  width: 38px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  color: #9d9a95;
  font-size: 18px;
  margin-left: -1px;
}
.social-icons-chef li a:hover {
  color: #ffffff;
}
.wrapper-chef-team {
  margin-left: -3%;
}
.chef-team {
  overflow: hidden;
}
.chef-team .single-chef {
  position: relative;
}
.chef-team > li {
  margin-bottom: 30px;
  width: 22%;
  float: left;
  margin-left: 3%;
}
.chef-team > li a {
  position: relative;
}
.chef-team > li img {
  width: 100%;
}
.chef-team > li:nth-child(2n+1) .chef-detail {
  left: 100%;
}
.chef-team > li:nth-child(2n+1) .chef-detail:before {
  left: 0;
}
.chef-team > li:nth-child(2n+1):hover .chef-detail {
  visibility: visible;
  opacity: 1;
}
.chef-team > li:nth-child(2n+1):hover .chef-detail:before {
  left: -9px;
  transition-delay: .2s;
}
.chef-team > li:nth-child(2n+2) .chef-detail {
  right: 100%;
}
.chef-team > li:nth-child(2n+2) .chef-detail:before {
  right: 0;
}
.chef-team > li:nth-child(2n+2):hover .chef-detail {
  visibility: visible;
  opacity: 1;
}
.chef-team > li:nth-child(2n+2):hover .chef-detail:before {
  right: -9px;
  transition-delay: .2s;
}
.chef-team > li:hover .chef-detail {
  transition: 0.2s all ease-in-out;
  width: 115%;
}
.chef-team > li:hover .chef-detail h4 {
  top: 0;
}
.chef-team > li:hover .chef-detail .type {
  transition-delay: .1s;
  top: 0;
}
.chef-team > li:hover .chef-detail p {
  transition-delay: .2s;
  opacity: 1;
}
.chef-team > li:hover .chef-detail .social-icons-chef {
  transition-delay: .3s;
  bottom: 0;
}
.chef-team .chef-detail {
  opacity: 0;
  visibility: hidden;
  position: absolute;
  top: 0;
  background-color: #3f3c37;
  height: 100%;
  width: 0;
  z-index: 2;
}
.chef-team .chef-detail h4,
.chef-team .chef-detail .type {
  position: relative;
  top: -150px;
  transition: 0.4s all ease-in-out;
}
.chef-team .chef-detail p {
  transition: 0.4s all ease-in-out;
  opacity: 0;
}
.chef-team .chef-detail h4 {
  font-size: 18px;
  color: #ffffff;
}
.chef-team .chef-detail .type {
  font-size: 12px;
  text-transform: uppercase;
  color: #9d9a95;
  margin-bottom: 20px;
  display: inline-block;
}
.chef-team .chef-detail p {
  color: #9d9a95;
}
.chef-team .chef-detail .social-icons-chef {
  transition: 0.2s all ease-in-out;
  margin-top: 20px;
  position: relative;
  bottom: -300px;
}
.chef-team .chef-detail:before {
  transition: 0.2s all ease-in-out;
  content: "";
  display: inline-block;
  border: 9px solid #3f3c37;
  transform: rotate(45deg);
  position: absolute;
  top: 25px;
  z-index: 3;
}
.chef-team .chef-detail-inner {
  overflow: hidden;
  padding: 25px;
}
/*--------------------*/
/* chefs banner
/*--------------------*/
.chefs-banner {
  background-image: url("../images/temp-images/chefs-banner.jpg");
  background-size: cover;
  background-position: center bottom;
  position: relative;
  overflow: hidden;
}
.chefs-banner .bg-chef-video {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  width: 100%;
  z-index: 10;
}
.wrapper-bg-video {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  width: 100%;
  background: #ffffff;
}
.chefs-card {
  position: relative;
  z-index: 12;
  margin-top: 120px;
  margin-bottom: 120px;
  max-width: 410px;
  background: #ffffff;
  padding: 15px;
  color: #000000;
}
.chefs-card h2 {
  font-family: 'Lato', sans-serif;
  font-weight: 900;
  text-transform: uppercase;
  font-style: normal;
  line-height: 36px;
  margin-bottom: 20px;
}
.chefs-card-inner {
  border: 1px solid #e4d9d1;
  padding: 20px 30px;
}
.chefs-card-inner .short-separator {
  margin-bottom: 30px;
}
.chefs-card-inner img {
  margin-bottom: 25px;
}
.chefs-card-inner p {
  font-family: 'Karla', sans-serif;
  margin-bottom: 25px;
}
.chefs-card-inner .read-more-bordered {
  margin-bottom: 25px;
}
/*-----------------------------------------------------------------------------------*/
/* our chefs ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* latest news
/*-----------------------------------------------------------------------------------*/
.latest-news {
  margin-bottom: 120px;
}
.wrapper-latest-news {
  display: flex;
  position: relative;
  flex-wrap: wrap;
}
.wrapper-latest-news .latest-news-bg {
  left: -246px;
  bottom: -120px;
}
.news-single {
  width: 25%;
  transition: 0.2s all ease-in-out;
}
.news-single p,
.news-single .more,
.news-single .news-post-meta li::before {
  transition: 0.2s all ease-in-out;
}
.news-single img {
  width: 100%;
}
.news-single .news-detail {
  padding: 21px 25px 25px ;
}
.news-single .news-detail h4 {
  margin-top: 4px;
  font-family: 'Lora', serif;
  font-style: italic;
  font-size: 18px;
  line-height: 24px;
  font-weight: 400;
}
.news-single .news-detail h4 a:hover {
  color: #c1452b;
  opacity: .7;
}
.news-single .news-detail .news-post-meta li {
  font-weight: 400;
  font-size: 13px;
  color: #4b4841;
}
.news-single .news-detail .news-post-meta.sb-line {
  margin-bottom: 40px;
}
.news-single .news-detail .news-post-meta.sb-line:after {
  transition: 0.2s all ease-in-out;
  background: #d6b76e;
  bottom: -22px;
}
.news-single .news-detail p {
  color: #918c82;
}
.news-single .news-detail .more {
  text-transform: uppercase;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  font-size: 13px;
  color: #4b4841;
}
.news-single .news-detail .more:after {
  content: "\f101";
  font-family: FontAwesome;
  margin-left: 5px;
}
.news-single .news-detail .more:hover {
  color: #c1452b !important;
}
.news-single:nth-of-type(odd) {
  background: #f4f1ea;
}
.news-single:nth-of-type(even) {
  background: #f9f7f2;
}
.news-single .news-visuals {
  height: 183px;
  overflow: hidden;
}
.news-single:hover {
  background: #F1EBDD !important;
}
.homo-4-col h3 a:hover {
  color: #6ebe3b;
}
.news-single .slick-dots,
.homo-4-col .slick-dots {
  bottom: 0;
}
.news-single .slick-dots li,
.homo-4-col .slick-dots li {
  margin: 0 2px;
}
.news-single .slick-dots li button:before,
.homo-4-col .slick-dots li button:before {
  font-size: 12px;
  opacity: 1;
  color: #ffffff;
  border: 2px solid transparent;
  line-height: 14px;
  width: 16px;
  height: 16px;
  border-radius: 50%;
}
.news-single .slick-dots li.slick-active button:before,
.homo-4-col .slick-dots li.slick-active button:before {
  color: #000000;
  border-color: #ffffff;
  background-color: #ffffff;
}
.news-visuals iframe {
  width: 100%;
  height: 100%;
  border: none;
}
/*--------------------*/
/* latest news var2
/*--------------------*/
.homo-4-col.news-variation2 {
  padding-top: 30px;
  padding-bottom: 50px;
}
.homo-4-col.news-variation2 h2,
.homo-4-col.news-variation2 h3 {
  text-transform: uppercase;
  font-style: normal;
}
.homo-4-col.news-variation2 h2 {
  font-family: 'Lato', sans-serif;
  font-weight: 900;
}
.homo-4-col.news-variation2 h3 {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  font-size: 16px;
  line-height: 30px;
  margin-bottom: 20px;
}
.homo-4-col.news-variation2 .short-separator {
  margin-bottom: 20px;
}
.homo-4-col.news-variation2 .read-more-bordered {
  margin-top: 20px;
}
.homo-4-col.news-variation2 .post-meta {
  margin-bottom: 20px;
}
.homo-4-col .video-post {
  height: 184px;
}
/*-----------------------------------------------------------------------------------*/
/* Latest news ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* recipe banner
/*-----------------------------------------------------------------------------------*/
.recipe-banner {
  background: #6ebe3b;
  position: relative;
  padding-top: 25px;
  padding-bottom: 20px;
  padding-left: 180px;
  padding-right: 25px;
}
.recipe-banner img {
  position: absolute;
  left: -35px;
  bottom: 0;
}
.recipe-banner .banner-text h2 {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  font-size: 24px;
  margin: 0 0 5px;
}
.recipe-banner .banner-text p {
  color: #397016;
  margin-bottom: 0;
}
.recipe-banner .submit-recipe {
  background: #000000;
}
.recipe-banner .submit-recipe:hover {
  background: #ffffff;
  color: #000000;
}
.recipe-button {
  text-align: right;
}
/*-----------------------------------------------------------------------------------*/
/* recipe banner ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* footer
/*-----------------------------------------------------------------------------------*/
.footer a {
  color: #ffffff;
  transition: 0.2s all ease-in-out;
  opacity: .8;
}
.footer a:hover {
  opacity: 1;
}
.footer .footer-copyright a {
  color: #ffffff !important;
}
.footer .footer-copyright a:hover {
  opacity: 1;
}
.footer-boxed .footer-inner {
  background-image: url("../images/temp-images/footer-bg.jpg");
}
.footer-fluid {
  background-image: url("../images/temp-images/footer-bg-full.jpg");
  background-size: cover;
}
.footer-inner {
  padding-top: 55px;
  position: relative;
  background-size: cover;
}
.footer-inner .logo-footer {
  display: inline-block;
  margin-bottom: 35px;
}
.footer-inner p {
  color: #bbbbbb;
  opacity: 0.8;
  margin-bottom: 35px;
}
.footer-inner .corner-image {
  bottom: 0;
  right: -415px;
}
.footer-variant-one .footer-inner {
  padding-left: 140px;
  padding-right: 140px;
}
.subs-social-options {
  border-top: 1px solid #2e2a26;
}
.subs-social-options .custom-col-options {
  border-width: 0px 1px 0px 0;
  border-style: solid;
  border-image: linear-gradient(to bottom, #2e2a26 80%, rgba(0, 0, 0, 0)) 1 100%;
}
.subs-social-options .left-side {
  padding-right: 30px;
  padding-bottom: 30px;
}
.widget-footer h2 {
  font-family: 'Lora', serif;
  font-style: italic;
  font-size: 21px;
  color: #ffffff;
  margin-top: 30px;
  margin-bottom: 20px;
}
.email-field {
  position: relative;
}
.email-field ::-webkit-input-placeholder {
  color: #736e6b;
}
.email-field :-moz-placeholder {
  /* Firefox 18- */
  color: #736e6b;
}
.email-field ::-moz-placeholder {
  /* Firefox 19+ */
  color: #736e6b;
}
.email-field :-ms-input-placeholder {
  color: #736e6b;
}
.email-field input {
  width: 100%;
  height: 40px;
  background: transparent;
  border: 1px solid #bbbbbb;
  padding-left: 15px;
  padding-right: 40px;
  font-size: 16px;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  color: #cccccc;
  outline: none;
  transition: 0.2s all ease-in-out;
}
.email-field input:focus {
  border-color: #ffffff;
  color: #bbbbbb;
}
.email-field button {
  display: inline-block;
  position: absolute;
  right: 0;
  top: 0;
  line-height: 38px;
  padding-right: 15px;
  cursor: pointer;
  border: none;
  background-color: transparent;
  color: #bbbbbb;
  transition: 0.2s all ease-in-out;
}
.email-field button:hover {
  color: #ffffff;
}
.social-icons ul {
  overflow: hidden;
  margin-top: -4px;
}
.social-icons ul li {
  display: inline-block;
  margin-right: 12px;
  margin-bottom: 12px;
}
.social-icons ul li a {
  display: inline-block;
  height: 47px;
  width: 47px;
  line-height: 47px;
  border-radius: 50%;
  border: 1px solid #bbbbbb;
  text-align: center;
  font-size: 18px;
  color: #bbbbbb;
  transition: 0.2s all ease-in-out;
}
.social-icons ul li a:hover {
  border-color: #ffffff;
  color: #ffffff;
}
.right-side {
  padding-left: 30px;
}
.footer-copyright {
  padding-top: 35px;
  padding-bottom: 30px;
}
.footer-copyright p {
  opacity: 1;
  font-size: 14px;
  color: #999999;
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  margin-bottom: 0;
}
.footer-copyright.var1 {
  border-top: 1px solid #2e2a26;
}
/*--------------------*/
/* footer var1
/*--------------------*/
.footer.footer-variant-two .wrapper-logo-detail {
  padding-bottom: 15px;
}
.footer.footer-variant-two .wrapper-logo-detail .right-side {
  padding-top: 30px;
  padding-left: 0;
}
.footer.footer-variant-two .footer-inner {
  padding-top: 40px;
}
.footer.footer-variant-two .widget h2 {
  margin-top: 48px;
}
.footer-social-icons {
  text-align: right;
}
.footer-social-icons ul li {
  display: inline-block;
  margin-left: 25px;
}
.footer-social-icons ul li a {
  display: inline-block;
  color: #736e6b;
  font-size: 18px;
}
.footer-social-icons ul li a:hover {
  color: #ffffff;
}
/*-----------------------------------------------------------------------------------*/
/* footer ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* banner
/*-----------------------------------------------------------------------------------*/
.banner {
  min-height: 210px;
  background-size: cover;
  background-position: bottom center;
}
.banner .main-heading {
  background: #ffffff;
  padding: 10px;
  display: inline-block;
  margin-top: 40px;
  margin-bottom: 36px;
}
.banner h1 {
  font-family: 'Lato', sans-serif;
  font-weight: 900;
  font-size: 24px;
  font-style: normal;
  text-transform: uppercase;
  border: 1px solid #e4d9d1;
  margin: 0;
  padding: 20px 40px;
}
.banner .container-tags .tag-inner {
  background: #000000;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  font-size: 16px;
}
.banner .container-tags .tag-inner i {
  margin-left: 3px;
}
.banner .container-tags .tag-inner:before {
  background: #000000;
}
.banner-blog {
  background-image: url("../images/temp-images/banner-blog.jpg");
}
.banner-chef {
  background-image: url("../images/temp-images/banner-chefs.jpg");
}
/*-----------------------------------------------------------------------------------*/
/* banner ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* blog page
/*-----------------------------------------------------------------------------------*/
.wrapper-main-contents {
  background: #f8f6f5;
  padding-top: 60px;
  padding-bottom: 120px;
}
.post-single {
  margin-bottom: 30px;
}
.post-single .post-visuals img {
  width: 100%;
}
.post-single .post-visuals a:hover {
  opacity: .8;
}
.post-single .post-visuals iframe {
  width: 100%;
  height: 342px;
  border: none;
}
.post-single h2,
.post-single h3,
.post-single h4,
.post-single h5,
.post-single h6 {
  font-style: normal;
  text-transform: uppercase;
  margin-bottom: 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
}
.post-single h2 a,
.post-single h3 a,
.post-single h4 a,
.post-single h5 a,
.post-single h6 a {
  display: inline-block;
}
.post-single h2 a:hover,
.post-single h3 a:hover,
.post-single h4 a:hover,
.post-single h5 a:hover,
.post-single h6 a:hover {
  color: #c1452b;
}
.post-single h2 {
  font-family: 'Lato', sans-serif;
  font-weight: 900;
  font-size: 21px;
  margin-top: 12px;
  padding-bottom: 20px;
  position: relative;
}
.post-single h2:after {
  content: "";
  display: inline-block;
  width: 50px;
  height: 3px;
  background: #6ebe3b;
  position: absolute;
  left: 0;
  bottom: 0;
}
.post-single h2 a:hover {
  color: #c1452b;
}
.post-single h3 {
  font-size: 18px;
}
.post-single h4 {
  font-size: 14px;
}
.post-single .post-meta {
  margin-bottom: 20px;
}
.post-single .post-meta li {
  color: #000000;
}
.post-single p {
  font-family: 'Karla', sans-serif;
  color: #3a3a3a;
  margin-bottom: 30px;
}
.post-single blockquote {
  font-family: 'Lato', sans-serif;
  font-style: italic;
  line-height: 24px;
  font-size: 16px;
  color: #3a3a3a;
  border-color: #6ebe3b;
}
.post-single .post-tags {
  margin-bottom: 40px;
  padding-left: 35px;
  position: relative;
  color: #000000;
}
.post-single .post-tags li {
  display: inline-block;
}
.post-single .post-tags li a {
  font-family: 'Karla', sans-serif;
}
.post-single .post-tags li a:hover {
  color: #c1452b;
}
.post-single .post-tags:before {
  position: absolute;
  font-family: FontAwesome;
  content: "\f02c";
  left: 0;
}
.post-single .prev-next-links {
  margin-bottom: 40px;
  text-transform: uppercase;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  color: #000000;
}
.post-single .prev-next-links a {
  display: inline-block;
}
.post-single .prev-next-links a:hover {
  color: #6ebe3b;
}
.post-single .prev-next-links .left-arrow i {
  margin-right: 5px;
}
.post-single .prev-next-links .right-arrow {
  float: right;
}
.post-single .prev-next-links .right-arrow i {
  margin-left: 5px;
}
.post-single .read-more-arrow {
  text-transform: uppercase;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  color: #000000;
  margin: 28px 0 20px;
  display: inline-block;
}
.post-single .read-more-arrow i {
  margin-left: 3px;
}
.post-single .read-more-arrow:hover {
  color: #c1452b;
}
.post-single audio {
  width: 100%;
}
.post-single.post-quotes p {
  font-family: 'Karla', sans-serif;
  font-style: italic;
  line-height: 30px;
  font-size: 18px;
}
.post-single.post-quotes .quote-mark {
  margin-top: 15px;
  margin-bottom: 15px;
}
.post-single.post-quotes .quote-mark i {
  font-size: 30px;
  color: #6ebe3b;
}
.post-single.post-quotes .quote-writer {
  display: inline-block;
  text-transform: uppercase;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  margin-top: 15px;
  margin-bottom: 34px;
}
.post-single.post-quotes .post-meta {
  margin-bottom: 0;
}
.post-single .audio-container {
  margin-bottom: 30px;
}
.post-contents {
  background: #ffffff;
  padding: 11px;
}
.post-contents-inner {
  border: 1px solid #e4d9d1;
  padding: 22px 33px 42px;
}
.wrapper-post-slider {
  position: relative;
}
.wrapper-post-slider:hover .arrow-nav {
  opacity: 1;
}
.wrapper-post-slider .arrow-nav {
  opacity: 0;
  cursor: pointer;
  display: inline-block;
  width: 29px;
  height: 37px;
  line-height: 37px;
  text-align: center;
  background: #000000;
  color: #ffffff;
  transition: 0.2s all ease-in-out;
  position: absolute;
  top: 50%;
  margin-top: -18px;
}
.wrapper-post-slider .arrow-nav:hover {
  color: #000000;
  background: #ffffff;
}
.wrapper-post-slider .right-arrow {
  right: -1px;
}
.page-nav {
  display: block;
  text-align: center;
}
.page-nav li {
  display: inline-block;
  margin-right: 10px;
}
.page-nav li a {
  display: inline-block;
  width: 38px;
  height: 38px;
  line-height: 36px;
  border: 1px solid #e4d9d1;
  background: #ffffff;
  font-family: 'Lora', serif;
  font-weight: 600;
}
.page-nav li a:hover {
  background: transparent;
}
.page-nav .current a {
  background: transparent;
}
.separator-post {
  height: 1px;
  background: #e4d9d1;
  margin-bottom: 42px;
}
.related-single {
  margin-bottom: 42px;
}
.related-single h4 {
  margin-top: 0;
  margin-bottom: 10px;
  line-height: 24px;
}
.related-single span a {
  color: #6ebe3b;
}
.related-single span a:hover {
  color: #c1452b;
}
.post-author {
  display: flex;
  margin-bottom: 42px;
}
.post-author .avatar {
  width: 19%;
  margin-right: 15px;
}
.post-author .avatar img {
  max-width: 100%;
  -webkit-transition: all 300ms ease-in-out;
  -moz-transition: all 300ms ease-in-out;
  -ms-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.post-author .avatar img:hover {
  opacity: 0.8;
}
.post-author .detail {
  width: 82%;
}
.post-author .detail .social-icons {
  float: right;
}
.post-author .detail .social-icons li {
  margin-left: 15px;
  display: inline-block;
  font-size: 16px;
  color: #ababab;
}
.post-author .detail .social-icons li a:hover {
  color: #6ebe3b;
}
.post-author .detail h5 {
  margin-top: 0;
  font-family: 'Lato', sans-serif;
  font-weight: 900;
  font-size: 16px;
  margin-bottom: 15px;
}
.post-author .detail .type {
  display: inline-block;
  text-transform: capitalize;
  font-family: 'Montserrat', sans-serif;
  color: #6ebe3b;
  margin-bottom: 15px;
}
.comments-list li .comment-inner {
  margin-bottom: 40px;
}
.comments-list li .gravatar {
  width: 17%;
  margin-right: 25px;
  float: left;
}
.comments-list li .gravatar img {
  max-width: 100%;
  -webkit-transition: all 300ms ease-in-out;
  -moz-transition: all 300ms ease-in-out;
  -ms-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.comments-list li .gravatar img:hover {
  opacity: 0.8;
}
.comments-list li .detail {
  overflow: hidden;
}
.comments-list li .detail h6 {
  margin-top: 0;
  font-size: 14px;
  margin-bottom: 15px;
  color: #3a3a3a;
}
.comments-list li .detail .comment-date {
  margin-bottom: 15px;
  display: inline-block;
  font-family: 'Karla', sans-serif;
  color: #000000;
}
.comments-list li .detail .comment-date i {
  margin-right: 15px;
}
.comments-list li ul {
  margin-left: 17%;
}
.post-comments h3 {
  margin: 48px 0;
}
.comment-reply {
  text-transform: uppercase;
  color: #000000;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
}
.comment-reply:hover {
  color: #6ebe3b;
}
.comment-reply i {
  transform: rotateY(180deg);
  margin-right: 5px;
}
.comments-form label {
  width: 15%;
  float: left;
  line-height: 42px;
  text-transform: uppercase;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  color: #000000;
}
.comments-form input[type="submit"] {
  margin-left: 15%;
  background: #6ebe3b;
  color: #ffffff;
  border: none;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  font-size: 16px;
  outline: none;
  padding-right: 24px;
  padding-left: 24px;
}
.comments-form input[type="submit"]:hover {
  background: #000000;
}
.comments-form input[type="text"],
.comments-form input[type="email"] {
  width: 70%;
}
.comments-form input[type="text"],
.comments-form input[type="email"],
.comments-form input[type="submit"],
.comments-form textarea {
  transition: 0.2s all ease-in-out;
  margin-bottom: 25px;
}
.comments-form input[type="text"],
.comments-form input[type="email"],
.comments-form input[type="submit"] {
  height: 42px;
}
.comments-form textarea {
  width: 85%;
  height: 175px;
  resize: none;
  padding-top: 15px;
  padding-bottom: 15px;
}
.comments-form input[type="text"],
.comments-form input[type="email"],
.comments-form textarea {
  border: 1px solid #e8e5e3;
  background: #f8f6f5;
  outline: none;
  padding-left: 15px;
  padding-right: 15px;
}
.comments-form input[type="text"]:focus,
.comments-form input[type="email"]:focus,
.comments-form textarea:focus {
  border-color: #6ebe3b;
}
/*-----------------------------------------------------------------------------------*/
/* blog page ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* widgets
/*-----------------------------------------------------------------------------------*/
.side-bar .widget {
  overflow: hidden;
  margin-bottom: 45px;
}
.side-bar .widget h2 {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  font-size: 18px;
  margin-top: 0;
  position: relative;
  margin-bottom: 32px;
  text-transform: capitalize;
}
.side-bar .widget h2:after {
  content: "";
  width: 100%;
  height: 1px;
  background: #e7e3e1;
  position: absolute;
  top: 50%;
  margin-left: 15px;
}
.side-bar .widget img {
  max-width: 100%;
}
.side-bar .search-bar-widget .search-field {
  position: relative;
}
.side-bar .search-bar-widget .search-field ::-webkit-input-placeholder {
  font-family: 'Lora', serif;
}
.side-bar .search-bar-widget .search-field :-moz-placeholder {
  /* Firefox 18- */
  font-family: 'Lora', serif;
}
.side-bar .search-bar-widget .search-field ::-moz-placeholder {
  /* Firefox 19+ */
  font-family: 'Lora', serif;
}
.side-bar .search-bar-widget .search-field :-ms-input-placeholder {
  font-family: 'Lora', serif;
}
.side-bar .search-bar-widget .search-field input {
  width: 100%;
  border: 1px solid #e7e3e1;
  height: 35px;
  padding-left: 13px;
  padding-right: 35px;
  outline: none;
}
.side-bar .search-bar-widget .search-field button {
  cursor: pointer;
  position: absolute;
  right: 0;
  top: 0;
  height: 35px;
  line-height: 33px;
  width: 35px;
  display: inline-block;
  text-align: center;
  border: none;
  background-color: transparent;
}
.side-bar .search-bar-widget .search-field button:hover {
  opacity: .8;
}
.side-bar .widget ul {
  margin-top: 10px;
}
.side-bar .widget li {
  margin-bottom: 10px;
}
.side-bar .widget li a {
  line-height: 21px;
  display: inline-block;
  text-transform: uppercase;
  color: #000000;
  font-family: 'Lato', sans-serif;
}
.side-bar .widget li a:hover {
  color: #c1452b;
}
.side-bar .widget li:last-child {
  border-bottom: none;
  margin-bottom: 0;
}
.side-bar .archives-widget li {
  width: 49%;
  display: inline-block;
}
.side-bar .archives-widget li span {
  color: #6ebe3b;
}
.side-bar .tags-widget li {
  display: inline-block;
  margin-right: 4px;
  margin-bottom: 8px;
}
.side-bar .tags-widget li a {
  display: inline-block;
  background: #ffffff;
  border: 1px solid #e7e3e1;
  padding: 4px 17px;
  text-transform: capitalize;
  font-family: 'Karla', sans-serif;
}
.side-bar .tags-widget li a:hover {
  background: #6ebe3b;
  border-color: #6ebe3b;
  color: #ffffff;
}
.side-bar .latest-news-widget {
  margin-bottom: 33px;
}
.side-bar .latest-news-widget li {
  padding-bottom: 18px;
  margin-bottom: 18px;
}
.widget li:last-child {
  border-bottom: none;
}
.latest-news-widget li {
  display: flex;
  padding-bottom: 15px;
  border-bottom: 1px solid #ebe8e6;
}
.latest-news-widget .thumb {
  margin-right: 15px;
}
.latest-news-widget .thumb a:hover {
  opacity: .7;
}
.latest-news-widget .thumb img {
  width: 66px;
  max-width: none;
}
.latest-news-widget .post-date {
  display: block;
  font-family: 'Karla', sans-serif;
  color: #514b49;
}
.recipe-search .search-bar-widget {
  margin-bottom: 21px;
}
.recipe-search .search-bar-widget ::-webkit-input-placeholder {
  color: #ffffff;
}
.recipe-search .search-bar-widget :-moz-placeholder {
  /* Firefox 18- */
  color: #ffffff;
}
.recipe-search .search-bar-widget ::-moz-placeholder {
  /* Firefox 19+ */
  color: #ffffff;
}
.recipe-search .search-bar-widget :-ms-input-placeholder {
  color: #ffffff;
}
.recipe-search .search-bar-widget ::-webkit-input-placeholder {
  font-family: 'Lora', serif;
  font-style: italic;
}
.recipe-search .search-bar-widget :-moz-placeholder {
  /* Firefox 18- */
  font-family: 'Lora', serif;
  font-style: italic;
}
.recipe-search .search-bar-widget ::-moz-placeholder {
  /* Firefox 19+ */
  font-family: 'Lora', serif;
  font-style: italic;
}
.recipe-search .search-bar-widget :-ms-input-placeholder {
  font-family: 'Lora', serif;
  font-style: italic;
}
.recipe-search .search-bar-widget input[type=search] {
  background-color: #000000;
  color: #ffffff;
  border-color: #000000;
  font-family: 'Lora', serif;
  font-style: italic;
}
.recipe-search .search-bar-widget button {
  color: #ffffff;
}
.recipe-search .category-list {
  padding: 9px;
  background: #6ebe3b;
}
.recipe-search .category-list ul {
  display: block;
  border: 1px solid #64ad36;
  margin: 0;
}
.recipe-search .category-list ul li {
  margin: 0;
  border-bottom: 1px solid #64ad36;
  min-height: 59px;
  display: flex;
  padding: 0 18px;
  justify-content: space-between;
  align-items: center;
}
.recipe-search .category-list ul li a {
  font-family: 'Lora', serif;
  font-style: italic;
  font-size: 16px;
  text-transform: capitalize;
  color: #33571c;
}
.recipe-search .category-list ul li:last-child {
  border-bottom: none;
}
.recipe-search .category-list ul li:hover a {
  color: #ffffff;
}
.recipe-search .category-list ul li:hover .icon-svg {
  fill: #ffffff;
}
.recipe-search .icon-svg {
  transition: 0.2s all ease-in-out;
  fill: #4C8924;
}
.side-bar-home .widget h2:after {
  background: #6ebe3b;
}
.widget-get-social ul {
  display: flex;
  justify-content: space-between;
  text-align: center;
  flex-wrap: wrap;
}
.widget-get-social ul li {
  display: block;
  background: #000000;
  width: 81px;
}
.widget-get-social ul li a {
  display: block !important;
  padding-top: 15px;
  padding-bottom: 15px;
  min-height: 106px;
}
.widget-get-social ul li a:hover {
  opacity: .8;
}
.widget-get-social ul li i {
  font-size: 24px;
  margin-bottom: 10px;
}
.widget-get-social ul li i,
.widget-get-social ul li span {
  display: block;
  color: #ffffff;
}
.widget-get-social ul li .count {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
}
.widget-get-social ul li .count-type {
  opacity: .7;
  font-family: 'Lato', sans-serif;
  font-weight: 400;
}
.widget-get-social ul li:last-child {
  margin-bottom: 10px !important;
}
.widget-get-social ul .facebook {
  background: #3b5998;
}
.widget-get-social ul .twitter {
  background: #33bcf3;
}
.widget-get-social ul .google-plus {
  background: #dd4b39;
}
div.widget-measurements {
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  font-size: 15px;
  color: #000000;
}
div.widget-measurements h2 {
  margin-bottom: 20px !important;
}
div.widget-measurements ul li {
  display: block;
  position: relative;
  padding-left: 15px;
  padding-top: 9px;
  padding-bottom: 9px;
  border-bottom: 1px solid #ebe8e6;
  margin-bottom: 0 !important;
}
div.widget-measurements ul li:before {
  content: "\f101";
  font-family: FontAwesome;
  display: inline-block;
  position: absolute;
  left: 0;
}
div.widget-measurements .default-btn {
  font-size: 14px;
}
.widget-overlay figure {
  position: relative;
  display: inline-block;
  overflow: hidden;
}
.widget-overlay figure img {
  width: 100%;
}
.widget-overlay figure:hover figcaption {
  background: #000000;
}
.widget-overlay figcaption {
  position: absolute;
  bottom: 0;
  transition: 0.2s all ease-in-out;
  background: rgba(0, 0, 0, 0.8);
  color: #ffffff;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  text-transform: uppercase;
  text-align: center;
  padding-top: 13px;
  padding-bottom: 13px;
  width: 100%;
}
/*--------------------*/
/* footer widgets styles
/*--------------------*/
.footer.footer-variant-two .widget a {
  color: #ffffff;
}
.footer.footer-variant-two .twitter-widget .link {
  color: #6ebe3b;
}
.footer .widget {
  margin-bottom: 30px;
}
.footer .widget h2 {
  font-size: 21px;
  color: #ffffff;
  font-weight: 400;
  margin-top: 30px;
  margin-bottom: 30px;
}
.footer .widget p {
  color: #8b8b8a;
  opacity: 1;
}
/*-----------------------------------------------------------------------------------*/
/* widgets ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* food tabs
/*-----------------------------------------------------------------------------------*/
.food-tabs {
  background: #f2eeec;
  padding-top: 80px;
  padding-bottom: 80px;
}
.food-tabs.var1 {
  background: transparent;
  padding-top: 0;
}
.recipe-of-day {
  width: 100%;
  position: relative;
  overflow: hidden;
}
.recipe-of-day h2 a:hover {
  color: #6ebe3b;
}
.recipe-of-day .recipe-contents-outer {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
}
.recipe-of-day .recipe-contents {
  background: #ffffff;
  max-width: 285px;
  padding: 10px;
  margin-left: 8%;
  margin-right: 8%;
}
.recipe-of-day .recipe-contents .tag {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  color: #ffffff;
  background: #6ebe3b;
  display: inline-block;
  padding: 6px 13px;
}
.recipe-of-day .recipe-contents h2 {
  font-family: 'Lato', sans-serif;
  font-weight: 900;
  margin-top: 20px;
  margin-bottom: 20px;
  font-size: 16px;
  text-transform: uppercase;
  font-style: normal;
  line-height: 30px;
}
.recipe-of-day .recipe-contents h2:after {
  display: none;
}
.recipe-of-day .recipe-contents .short-separator {
  margin-bottom: 20px;
}
.recipe-of-day .recipe-contents p {
  font-family: 'Karla', sans-serif;
}
.recipe-of-day .recipe-content-inner {
  padding: 25px 20px;
  border: 1px solid #e4d9d1;
}
.recipe-of-day .recipe-content-inner p,
.recipe-of-day .recipe-content-inner .read-more {
  color: #000000;
}
.recipe-of-day .recipe-content-inner .read-more:hover {
  color: #c1452b;
}
.read-more {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  text-transform: capitalize;
}
.read-more:hover {
  color: #c1452b;
}
/*--------------------*/
/*
/*--------------------*/
.tabs-bordered .tab-container {
  width: 100%;
}
.tabs-bordered .tabs-nav {
  border: 1px solid #e6e0dd;
  border-bottom: none;
}
.tabs-bordered .tab-container {
  border: 1px solid #e6e0dd;
  border-top: none;
}
.tab-container {
  border: 1px solid #ffffff;
  border-top: none;
}
.tab-container .icon-container {
  width: 20px;
}
.tab-container .icon-svg {
  fill: #6ebe3b;
}
.tab-container ul {
  display: flex;
  justify-content: flex-end;
  margin-bottom: 0;
  margin-left: -1px;
  margin-right: -1px;
}
.tab-container ul li {
  transition: 0.2s all ease-in-out;
  cursor: pointer;
  display: inline-block;
  width: 33.33%;
  background: #e6e0dd;
  border-right: 1px solid #f2eeec;
  text-align: center;
  padding-top: 9px;
  padding-bottom: 9px;
}
.tab-container ul li a {
  display: inline-block;
  text-transform: uppercase;
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  color: #736a65;
  border-bottom: 3px solid transparent;
  padding-top: 5px;
  padding-bottom: 5px;
}
.tab-container ul li:last-child {
  border-right: 0;
}
.tab-container ul li.active,
.tab-container ul li:hover {
  background: #ffffff;
}
.tab-container ul li.active a,
.tab-container ul li:hover a {
  font-family: 'Lato', sans-serif;
  font-weight: 900;
  color: #000000;
  border-color: #6ebe3b;
}
.custom-row-food-tabs,
.custom-col-food-tabs {
  display: flex;
}
.tab-container {
  background: #ffffff;
}
.tabs-container .tab-content {
  padding: 24px 25px;
}
.tabs-container .content-inner {
  padding-top: 22px;
  padding-bottom: 22px;
  border-bottom: 1px solid #f5f2f0;
}
.tabs-container .content-inner:last-of-type {
  border-bottom-color: transparent;
}
.tabs-container .left-side {
  float: left;
}
.tabs-container .left-side img {
  max-width: 100%;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
}
.tabs-container .left-side img:hover {
  opacity: 0.8;
}
.tabs-container .right-side {
  overflow: hidden;
  padding-left: 19px;
}
.tabs-container .right-side h3 {
  line-height: 21px;
  margin-top: 0;
  font-size: 14px;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  text-transform: uppercase;
  font-style: normal;
  margin-bottom: 2px;
}
.tabs-container .right-side h3 a:hover {
  color: #c1452b;
}
.tabs-container .right-side .rating-box {
  padding: 0;
}
.container-food-tabs {
  position: relative;
  z-index: 2;
}
.bg-corner-tabs {
  right: -282px;
  bottom: -73px;
}
/*-----------------------------------------------------------------------------------*/
/* food tans end
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* recipes home page variation 4 & 5
/*-----------------------------------------------------------------------------------*/
.recipes-home-body {
  background: #f8f6f5;
  padding-top: 85px;
  padding-bottom: 85px;
}
.recipes-home-body .recipe-of-day {
  margin-bottom: 40px;
}
.recipes-home-body .recipe-of-day img {
  width: 100%;
}
.recipes-home-body .banner-header {
  margin-bottom: 30px;
}
.recipes-home-body .banner-header img {
  max-width: 100%;
}
.recipe-set {
  overflow: hidden;
}
.recipe-set h2 {
  margin-top: 0;
  margin-bottom: 30px;
  font-size: 24px;
  position: relative;
}
.recipe-set h2:after {
  content: "";
  display: inline-block;
  width: 100%;
  height: 1px;
  position: absolute;
  background: #e7e3e1;
  margin-left: 20px;
  margin-top: 15px;
}
.boxed-recipes {
  margin-bottom: 20px;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}
.boxed-recipes .recipe-single {
  width: 31%;
  margin-bottom: 30px;
}
.boxed-recipes .recipe-single:hover .recipe-image img {
  transform: scale(1.1);
}
.boxed-recipes .recipe-image {
  overflow: hidden;
}
.boxed-recipes .recipe-image img {
  transition: 0.3s all ease-in-out;
  width: 100%;
}
.boxed-recipes .outer-detail {
  background: #ffffff;
  padding: 10px;
}
.boxed-recipes .outer-detail .rating-box {
  padding: 10px 0;
}
.boxed-recipes .outer-detail .icon-container {
  width: 20px;
}
.boxed-recipes .outer-detail .post-meta {
  margin-bottom: 0;
  padding: 10px 0;
}
.boxed-recipes .outer-detail .post-meta li {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  font-size: 13px;
  color: #000000;
}
.boxed-recipes .outer-detail .read-more {
  color: #000000;
  margin: 10px  0;
  font-size: 14px;
}
.boxed-recipes .detail {
  border: 1px solid #e4d9d1;
  padding: 20px 18px;
}
.boxed-recipes .detail h3 {
  margin-top: 0;
  font-family: 'Lato', sans-serif;
  font-weight: 900;
  font-size: 16px;
  text-transform: uppercase;
  font-style: normal;
  line-height: 30px;
}
.boxed-recipes .detail .short-separator {
  margin-bottom: 10px;
}
.boxed-recipes .detail a {
  display: inline-block;
}
.boxed-recipes .detail a:hover {
  color: #c1452b;
}
/*-----------------------------------------------------------------------------------*/
/* recipes home page variation 4 & 5 ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* advance search form
/*-----------------------------------------------------------------------------------*/
.advance-search {
  border-bottom: 1px solid #e4d9d1;
}
.advance-search.open .wrapper-search .tag-inner {
  background: #c1452b;
}
.advance-search.open .wrapper-search .tag-inner:before {
  background: #c1452b;
}
.advance-search.open .wrapper-search .tag-inner i {
  transform: rotateX(180deg);
}
.advance-search.search-main .outer-advance-search {
  display: block;
}
.advance-search button {
  width: 42px;
  height: 38px;
  line-height: 34px;
  text-align: center;
  color: #ffffff;
  background-color: #6ebe3b;
  border: none;
  transition: 0.2s all ease-in-out;
}
.advance-search button:hover {
  background-color: #000000;
}
.advance-search label {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  color: #000000;
  text-transform: capitalize;
  font-size: 14px;
}
.advance-search .selectric {
  background: #ffffff;
  height: 38px;
  border-color: #e4d9d1;
}
.advance-search .selectric p {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  color: #000000;
  font-size: 14px;
}
.advance-search .selectric .button {
  font: FontAwesome;
}
.advance-search .selectric .button:after {
  height: 38px;
  width: 38px;
  line-height: 38px;
  border: none;
  content: "\f107";
  font-family: FontAwesome;
}
.advance-search .selectric-items .selectric-scroll {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
}
.outer-advance-search {
  padding: 22px 0;
  display: none;
}
.wrapper-search {
  position: relative;
}
.wrapper-search .container-tags {
  position: absolute;
  top: -46px;
}
.wrapper-search .tag-inner {
  cursor: pointer;
  font-weight: 400;
  background: #000000;
  transition: 0.2s all ease-in-out;
}
.wrapper-search .tag-inner:before {
  background: #000000;
  transition: 0.2s all ease-in-out;
}
.wrapper-search .tag-inner:hover {
  background: #c1452b;
}
.wrapper-search .tag-inner:hover:before {
  background: #c1452b;
}
.wrapper-search .tag-inner i {
  font-size: 16px;
  margin-left: 5px;
  margin-top: 0;
  font-weight: 700;
  transform: rotate(0);
  transition: 0.5s all ease-in-out;
  display: inline-block;
  vertical-align: middle;
}
.inner-advance-search {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
}
.inner-advance-search .form-field {
  margin-right: 15px;
  flex: 1;
}
.inner-advance-search .form-field input {
  width: 100%;
  height: 38px;
}
/*-----------------------------------------------------------------------------------*/
/* advance search form ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* contact page
/*-----------------------------------------------------------------------------------*/
.recipes-home-body.inner-page {
  padding-top: 60px;
}
.contact-container {
  background: #ffffff;
  padding: 30px;
}
.contact-container h3 {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 16px;
  color: #514b49;
  margin-bottom: 40px;
  position: relative;
}
.contact-container h3:after {
  content: "";
  display: inline-block;
  width: 48px;
  height: 3px;
  background: #5eaa2e;
  position: absolute;
  left: 0;
  bottom: -20px;
}
.contact-container p,
.contact-container .contact-options {
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  font-size: 15px;
  color: #514b49;
}
.contact-container .contact-options {
  margin-top: 30px;
}
.contact-container .contact-options span {
  font-weight: 700;
}
.contact-container .contact-options li {
  padding-left: 30px;
  position: relative;
  margin-bottom: 13px;
}
.contact-container .contact-options li:before {
  font-family: FontAwesome;
  position: absolute;
  left: 0;
  top: 0;
  line-height: 20px;
  font-size: 21px;
}
.contact-container .contact-options .phone:before {
  content: "\f098";
}
.contact-container .contact-options .fax:before {
  content: "\f1ac";
  font-size: 18px;
}
.contact-container .contact-options .email:before {
  content: "\f199";
}
.contact-option-single {
  margin-bottom: 50px;
}
#contact-form {
  padding-right: 35px;
}
#contact-form ::-webkit-input-placeholder {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  color: #514b49;
}
#contact-form :-moz-placeholder {
  /* Firefox 18- */
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  color: #514b49;
}
#contact-form ::-moz-placeholder {
  /* Firefox 19+ */
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  color: #514b49;
}
#contact-form :-ms-input-placeholder {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  color: #514b49;
}
#contact-form input,
#contact-form textarea {
  width: 100%;
  margin-bottom: 29px;
  border: 1px solid #e4d9d1;
  outline: none;
  padding-left: 15px;
  padding-right: 15px;
  font-size: 16px;
}
#contact-form input:focus,
#contact-form textarea:focus {
  border-color: #c1452b;
}
#contact-form .required::-webkit-input-placeholder:after {
  content: "*";
  color: #e60000;
}
#contact-form .required::-moz-placeholder:after {
  content: "*";
  color: #e60000;
}
#contact-form .required:-ms-input-placeholder:after {
  content: "*";
  color: #e60000;
}
#contact-form .requiredinput:-moz-placeholder:after {
  content: "*";
  color: #e60000;
}
#contact-form input {
  height: 40px;
}
#contact-form textarea {
  padding-top: 15px;
  padding-bottom: 15px;
  height: 90px;
  resize: none;
}
#contact-form button {
  background: #6ebe3b;
  color: #ffffff;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  font-size: 16px;
  text-transform: capitalize;
  outline: none;
  border: none;
  padding: 9px 38px;
  transition: 0.2s all ease-in-out;
}
#contact-form button:hover {
  background: #000000;
}
#contact-form .error {
  border-color: #c1452b;
}
#map_canvas {
  height: 368px;
}
.error-container {
  margin-top: 20px;
}
.error-container .error {
  display: block;
  color: #c1452b;
  font-family: 'Lato', sans-serif;
  font-size: 14px;
  text-transform: capitalize;
}
#contact-loader {
  display: none;
  vertical-align: -7px;
  margin-left: 5px;
}
#message-sent {
  margin-top: 20px;
  display: block;
  color: #6ebe3b;
  font-family: 'Lato', sans-serif;
  font-size: 14px;
  text-transform: capitalize;
}
/*-----------------------------------------------------------------------------------*/
/* contact page ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* recipe detail page
/*-----------------------------------------------------------------------------------*/
.recipe-set .single-recipe-detail h2 {
  margin-top: 5px;
  margin-bottom: 5px;
}
.recipe-set .single-recipe-detail .rating-box {
  padding: 0;
}
.recipe-set .single-recipe-detail .custom-arrows.wider {
  opacity: 0;
  width: 100%;
  left: 0;
  margin-top: -65px;
  -webkit-transition: all 300ms ease-in-out;
  -moz-transition: all 300ms ease-in-out;
  -ms-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.recipe-set .single-recipe-detail .custom-arrows.wider span {
  position: absolute;
  display: block !important;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.recipe-set .single-recipe-detail .custom-arrows.wider span.left-arrow {
  left: 0;
}
.recipe-set .single-recipe-detail .custom-arrows.wider span.right-arrow {
  right: 0;
}
.recipe-set .single-recipe-detail .top-slider:hover .custom-arrows {
  opacity: 1;
}
.recipe-set .single-recipe-detail #recipe-slider-carousel {
  position: absolute;
  left: 0;
  bottom: 0;
  z-index: 500;
  height: 102px;
  width: 100%;
  padding: 24px 50px;
  background-color: rgba(0, 0, 0, 0.8);
}
.recipe-set .single-recipe-detail #recipe-slider-carousel .custom-arrows {
  opacity: 0;
  width: 100%;
  left: 0;
  top: 22px;
  margin-top: 0;
  -webkit-transition: all 300ms ease-in-out;
  -moz-transition: all 300ms ease-in-out;
  -ms-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.recipe-set .single-recipe-detail #recipe-slider-carousel .custom-arrows span {
  position: absolute;
  display: block !important;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background: none;
}
.recipe-set .single-recipe-detail #recipe-slider-carousel .custom-arrows span.left-arrow {
  left: 5px;
}
.recipe-set .single-recipe-detail #recipe-slider-carousel .custom-arrows span.right-arrow {
  right: 5px;
}
.recipe-set .single-recipe-detail #recipe-slider-carousel:hover .custom-arrows {
  opacity: 1;
}
.recipe-set .single-recipe-detail #recipe-slider-carousel ul li {
  opacity: 0.8;
  margin-right: 19px;
}
.recipe-set .single-recipe-detail #recipe-slider-carousel ul li.flex-active-slide {
  opacity: 1;
}
.wrapper-detail-contents h3 {
  font-size: 18px;
  margin-bottom: 20px;
}
.wrapper-detail-contents h3.lined {
  margin-bottom: 30px;
  padding: 2px 0;
}
.wrapper-detail-contents h3.lined:after {
  margin-top: 10px;
}
.wrapper-recipe-heading {
  margin-bottom: 20px;
  display: flex;
  justify-content: space-between;
}
.wrapper-recipe-heading .heading {
  width: 76%;
}
.wrapper-recipe-heading .recipe-media {
  overflow: hidden;
  width: 20%;
  position: relative;
  z-index: 66;
}
.wrapper-recipe-heading .watch-video {
  display: block;
  padding: 0;
  text-align: center;
}
.wrapper-recipe-heading .rating-box .icon-container {
  width: 20px;
  vertical-align: top;
}
.wrapper-recipe-heading .rating-box .icon-svg {
  fill: #6ebe3b;
}
.slider-recipe-detail {
  display: flex;
  justify-content: space-between;
}
.slider-recipe-detail .wrapper-slider-detail {
  width: 80%;
  position: relative;
}
.slider-recipe-detail .wrapper-slider-detail .flexslider {
  border: none;
  margin-bottom: 0;
}
.slider-recipe-detail .wrapper-slider-detail .wrapper-slider-nav {
  position: relative;
}
.slider-recipe-detail .wrapper-slider-detail .wrapper-slider-nav .slider-nav li {
  margin-right: 15px;
}
.slider-recipe-detail .wrapper-slider-detail .wrapper-slider-nav .slider-nav .flex-direction-nav {
  position: absolute;
}
.slider-recipe-detail .recipe-specs {
  margin-bottom: 0;
  width: 20%;
  background: #ffffff;
  display: flex;
  flex-direction: column;
  padding: 11px;
}
.slider-recipe-detail .recipe-specs li {
  flex: 1;
  border: 1px solid #e4d9d1;
  border-bottom: none;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  color: #000000;
}
.slider-recipe-detail .recipe-specs li:last-child {
  border: 1px solid #e4d9d1;
}
.slider-recipe-detail .recipe-specs li span {
  display: inline-block;
}
.slider-recipe-detail .recipe-specs li .count {
  font-family: 'Lora', serif;
  font-weight: 700;
  font-size: 24px;
}
.slider-recipe-detail .recipe-specs li .count span {
  font-weight: 400;
  font-size: 21px;
}
.slider-recipe-detail .recipe-specs li .text {
  font-family: 'Lato', sans-serif;
}
.wrapper-slider-nav {
  position: relative;
  z-index: 999;
  margin: 0;
  padding: 14px 59px;
  background: rgba(0, 0, 0, 0.83);
}
.wrapper-slider-nav .slider-nav .slick-slide {
  padding: 15px;
}
.single-recipe-detail {
  margin-bottom: 30px;
}
.recipe-detail-body {
  margin-bottom: 60px;
  overflow: hidden;
  background: #ffffff;
  padding: 25px 40px;
  color: #000000;
}
.recipe-detail-body .print-button {
  float: right;
  margin-bottom: 10px;
}
.recipe-detail-body p {
  font-family: 'Lato', sans-serif;
  font-size: 15px;
  line-height: 26px;
}
.recipe-detail-body .separator-post {
  margin-bottom: 25px;
}
.recipe-detail-body .rating-box {
  display: inline-block;
  padding: 0;
  float: right;
  width: auto;
}
.recipe-detail-body .rating-box .icon-container {
  width: 20px;
}
.recipe-detail-body .rating-box .icon-svg {
  fill: #6ebe3b;
}
.pre-tags {
  display: inline-block;
}
.pre-tags li {
  display: inline-block;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  font-size: 16px;
  margin-right: 30px;
}
.pre-tags span {
  font-weight: 400;
}
.print-button {
  display: inline-block;
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  font-size: 16px;
}
.print-button i {
  margin-right: 5px;
}
.print-button:hover {
  color: #c1452b;
}
.ingredients-checkbox {
  margin-bottom: 52px;
  border: 1px solid #e4d9d1;
  display: flex;
}
.ingredients-checkbox .ingredients {
  padding: 0 25px;
  width: 58%;
  background-image: url("../images/bg-ingredients.png");
  background-repeat: no-repeat;
  background-position: right bottom;
}
.ingredients-checkbox .ingredients ul li {
  position: relative;
  margin-bottom: 15px;
  padding-left: 24px;
}
.ingredients-checkbox .ingredients label {
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  font-size: 15px;
  vertical-align: middle;
  cursor: pointer;
}
.ingredients-checkbox .ingredients input[type=checkbox] {
  cursor: pointer;
  position: absolute;
  top: -1px;
  left: 0;
}
.ingredients-checkbox .ingredients input[type=checkbox]:after {
  display: inline-block;
  content: "";
  background: #c8b8ad;
  border-radius: 3px;
  width: 15px;
  height: 15px;
}
.ingredients-checkbox .ingredients input[type=checkbox]:checked:after {
  font-family: FontAwesome;
  content: "\f14a";
  background: #ffffff;
  color: #000000;
  font-size: 18px;
  margin-top: -2px;
}
.ingredients-checkbox .nutritional {
  background-image: url("../images/bg-nutritional.png");
  background-repeat: no-repeat;
  background-position: right top;
  padding: 0 25px;
  width: 42%;
  background-color: #f6f2ee;
}
.ingredients-checkbox .nutritional .separator-post {
  margin-bottom: 10px;
}
.nutrition-detail {
  display: flex;
  font-family: 'Lato', sans-serif;
  font-weight: 400;
}
.nutrition-detail span {
  font-weight: 700;
}
.nutrition-detail div {
  flex: 1;
  margin-bottom: 10px;
}
.steps-list li {
  clear: both;
  margin-bottom: 35px;
}
.steps-list .step-image {
  float: left;
  margin-right: 30px;
  width: 30%;
  margin-bottom: 10px;
}
.steps-list .step-image img {
  max-width: 100%;
}
.steps-list .step-detail {
  overflow: hidden;
}
.steps-list .step-detail h3 {
  margin-top: 5px;
}
.tips-variations {
  border: 1px solid #c9d6bf;
  background-color: #eff9e8;
  padding: 32px;
  background-image: url("../images/bg-tips.png");
  background-repeat: no-repeat;
  background-position: right bottom;
  margin-bottom: 44px;
}
.tips-variations h3 {
  margin-top: 0;
}
.tips-variations li {
  padding-left: 25px;
  position: relative;
  margin-bottom: 25px;
}
.tips-variations li:before {
  font-family: FontAwesome;
  content: "\f00c";
  display: inline-block;
  font-size: 15px;
  position: absolute;
  left: 0;
  line-height: 26px;
}
.tags-icons span {
  font-size: 16px;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
}
.tags-icons ul {
  display: inline-block;
}
.tags-icons ul li {
  display: inline-block;
  margin-bottom: 8px;
}
.tags-icons ul li a {
  display: inline-block;
}
.tags-icons .details-tags ul:before {
  content: "Tags : ";
  font-size: 16px;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
}
.tags-icons .details-tags li {
  margin-right: 5px;
}
.tags-icons .details-tags a {
  padding: 7px 9px;
  border: 1px solid #e4d9d1;
  font-family: 'Lato', sans-serif;
  font-weight: 400;
}
.tags-icons .details-tags a:hover {
  background: #000000;
  color: #ffffff;
  border-color: #000000;
}
.tags-icons .details-social-icons {
  text-align: right;
  margin-top: 7px;
}
.tags-icons .details-social-icons ul:before {
  content: "Share : ";
  font-size: 16px;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
}
.tags-icons .details-social-icons li {
  margin-left: 12px;
}
.tags-icons .details-social-icons a {
  color: #736e6b;
}
.tags-icons .details-social-icons a:hover {
  color: #000000;
}
.related-recipes .rating-box {
  padding-left: 0;
  padding-right: 0;
}
.recipe-comments {
  margin-bottom: 60px;
}
.recipe-comments ul li {
  clear: both;
  margin-bottom: 28px;
  margin-top: 28px;
}
.recipe-comments ul li ul {
  margin-left: 107px;
}
.recipe-comments h5 {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  font-size: 18px;
  margin-bottom: 10px;
  display: inline-block;
  margin-right: 5px;
}
.recipe-comments h5 a:hover {
  color: #c1452b;
}
.recipe-comments .time {
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  font-size: 12px;
  color: #aaa6a5;
}
.recipe-comments .avatar {
  float: left;
  margin-right: 23px;
  margin-bottom: 23px;
}
.recipe-comments .comment {
  background-color: #ffffff;
  overflow: hidden;
  padding: 10px 25px;
}
.recipe-comments .comment p {
  color: #7e7e7e;
  line-height: 23px;
  padding-right: 90px;
  margin-bottom: 0;
}
.recipe-comments .comment .reply-button {
  float: right;
  font-family: 'Lora', serif;
  font-style: italic;
}
.recipe-comments .comment .reply-button:before {
  font-family: FontAwesome;
  content: "\f100";
  font-style: normal;
  margin-right: 5px;
}
.recipe-comments .comment .reply-button:hover {
  color: #c1452b;
}
.comment-form form {
  background-color: #ffffff;
  padding: 25px;
  color: #000000;
}
.comment-form form ::-webkit-input-placeholder {
  font-family: 'Lora', serif;
  font-style: italic;
  color: #000000;
  font-size: 16px;
}
.comment-form form :-moz-placeholder {
  /* Firefox 18- */
  font-family: 'Lora', serif;
  font-style: italic;
  color: #000000;
  font-size: 16px;
}
.comment-form form ::-moz-placeholder {
  /* Firefox 19+ */
  font-family: 'Lora', serif;
  font-style: italic;
  color: #000000;
  font-size: 16px;
}
.comment-form form :-ms-input-placeholder {
  font-family: 'Lora', serif;
  font-style: italic;
  color: #000000;
  font-size: 16px;
}
.comment-form input,
.comment-form textarea {
  width: 100%;
  border: none;
  outline: none;
  padding-left: 10px;
  padding-right: 10px;
}
.comment-form input {
  height: 50px;
  border-bottom: 1px solid #e7e3e1;
}
.comment-form textarea {
  margin-bottom: 40px;
  background-color: transparent;
  display: block;
  line-height: 50px;
  overflow: hidden;
  resize: none;
  background-image: linear-gradient(#ffffff 49px, #e7e3e1 50px);
  background-size: 100% 50px;
  height: 100px;
  background-attachment: scroll;
}
.comment-form button {
  height: 42px;
  background: #6ebe3b;
  font-family: 'Lora', serif;
  font-size: 16px;
  color: #ffffff;
  padding: 0 35px;
  border: none;
  transition: 0.2s all ease-in-out;
}
.comment-form button:hover {
  background: #000000;
}
/*--------------------*/
/* recipe detail 2
/*--------------------*/
.wrapper-detail-contents.detail-2 .wrapper-recipe-heading .heading {
  overflow: hidden;
  width: 80%;
}
.wrapper-detail-contents.detail-2 .wrapper-recipe-heading .recipe-media {
  text-align: center;
  margin-top: 8px;
}
.slider-detail2 img {
  width: 100%;
}
.recipe-set .slider-recipe-detail2 {
  position: relative;
}
.recipe-set .slider-recipe-detail2 .slider-video-button {
  position: absolute;
  right: 35px;
  top: 35px;
  display: inline-block;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 700;
  font-size: 16px;
  color: #ffffff;
  background: #6ebe3b;
  padding: 0 40px;
  height: 40px;
  line-height: 40px;
}
.recipe-set .slider-recipe-detail2 .slider-video-button:hover {
  background: #000000;
}
.recipe-set .slider-recipe-detail2 .custom-arrows {
  margin-top: -50px;
}
.recipe-set .slider-recipe-detail2:hover .custom-arrows {
  opacity: 1 !important;
}
.recipe-specs-2 {
  display: flex;
  background: #000000;
  color: #ffffff;
  flex-wrap: wrap;
}
.recipe-specs-2 li {
  min-width: 144px;
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  flex: 1;
  text-align: center;
  border-right: 1px solid #2c2c2c;
  border-bottom: 1px solid #2c2c2c;
  padding: 16px 0;
  font-size: 16px;
  transition: 0.2s all ease-in-out;
}
.recipe-specs-2 li:last-child {
  border-right: none;
}
.recipe-specs-2 li span {
  color: #aa9f9a;
}
.recipe-specs-2 li:hover {
  background: #333333;
}
.steps-tabs .tab {
  outline: none;
  height: 40px;
  text-align: center;
  border-bottom: 1px solid #e4d9d1;
  border-right: 1px solid #e4d9d1;
  padding-top: 3px;
  padding-bottom: 10px;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  font-size: 16px;
  color: #000000;
  cursor: pointer;
}
.steps-tabs .slick-current {
  color: #6ebe3b;
  border-bottom: 3px solid #6ebe3b;
}
.buttons-steps {
  display: inline-block;
  border: 1px solid #e4d9d1;
  width: 82px;
}
.buttons-steps span {
  width: 40px;
  height: 38px;
  line-height: 36px;
  text-align: center;
  display: table-cell;
  cursor: pointer;
  transition: 0.2s all ease-in-out;
}
.buttons-steps span:hover {
  background: #f6f2ee;
}
.buttons-steps .prev-step {
  border-right: 1px solid #e4d9d1;
}
.steps-detail .single-detail {
  outline: none;
  padding-top: 50px;
  padding-bottom: 50px;
}
.steps-detail .single-detail p {
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 26px;
}
.steps-detail .single-detail img {
  max-width: 100%;
}
.recipe-steps .accordion dt {
  background: none;
  border: 1px solid #eeeeee;
  position: relative;
  padding-left: 50px;
}
.recipe-steps .accordion dt .arrow {
  position: absolute;
  top: 13px;
  left: 22px;
}
.recipe-steps .accordion dt .arrow i {
  position: absolute;
  top: 6px;
  left: 0;
}
.recipe-steps .accordion dt .arrow i.stand {
  -webkit-transition: transform 300ms ease-in-out;
  -moz-transition: transform 300ms ease-in-out;
  -ms-transition: transform 300ms ease-in-out;
  -o-transition: transform 300ms ease-in-out;
  transition: transform 300ms ease-in-out;
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
  left: -1px;
}
.recipe-steps .accordion dt.current {
  background: none;
  color: #000000;
}
.recipe-steps .accordion dt.current .arrow .stand {
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
}
.boxed-recipes .icon-svg {
  fill: #6ebe3b;
}
/*-----------------------------------------------------------------------------------*/
/* recipe detail page ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* Listing list & grid
/*-----------------------------------------------------------------------------------*/
.listing {
  margin-bottom: 60px;
  display: flex;
  background: #ffffff;
  color: #000000;
}
.listing .icon-svg {
  fill: #6ebe3b;
}
.listing .image {
  width: 31%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgba(228, 228, 228, 0.5);
}
.listing .image a:hover {
  opacity: .7;
}
.listing .image img {
  max-width: 100%;
}
.listing .detail {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  width: 69%;
  border: 1px solid #e4d9d1;
  margin: 10px;
  padding: 20px 25px;
}
.listing .detail h4 {
  line-height: 30px;
  margin-top: 0;
  font-family: 'Lato', sans-serif;
  font-weight: 900;
  font-size: 16px;
  text-transform: uppercase;
  font-style: normal;
  position: relative;
  padding-bottom: 20px;
}
.listing .detail h4:after {
  content: "";
  display: inline-block;
  width: 50px;
  height: 3px;
  background: #6ebe3b;
  position: absolute;
  left: 0;
  bottom: 0;
}
.listing .detail h4 a {
  display: inline-block;
}
.listing .detail h4 a:hover {
  color: #c1452b;
}
.listing .detail p {
  font-size: 15px;
  line-height: 26px;
}
.listing .detail .chef-social-links {
  text-align: right;
}
.listing .detail .chef-social-links li {
  display: inline-block;
  margin-left: 15px;
}
.listing .detail .chef-social-links li a {
  font-size: 18px;
  display: inline-block;
}
.listing .detail .chef-social-links li a:hover {
  color: #c1452b;
  transform: scale(1.5);
}
.listing .meta-listing {
  display: flex;
  justify-content: space-between;
}
.listing .meta-listing .post-meta {
  flex: 1;
  margin-bottom: 0;
}
.listing .meta-listing .post-meta li {
  margin-right: 12px;
}
.listing .meta-listing .post-meta li:last-child {
  margin-right: 0;
}
.listing .meta-listing .rating-box {
  flex: 1;
  padding: 0;
  text-align: right;
}
.recipe-listing .listing {
  margin-bottom: 30px;
}
.listing-list .listing .detail h4 {
  padding-bottom: 10px;
}
.listing-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.listing-grid .listing {
  text-align: center;
  flex-direction: column;
  width: 31%;
}
.listing-grid .listing .image,
.listing-grid .listing .detail {
  width: auto;
}
.listing-grid .listing .detail {
  padding: 20px 15px;
}
.listing-grid .listing .detail h4 {
  margin-bottom: 15px;
}
.listing-grid .listing .detail h4:after {
  left: 50%;
  margin-left: -25px;
}
.listing-grid .listing .detail p {
  display: none;
}
.listing-grid .listing .detail .meta-listing {
  flex-direction: column;
}
.listing-grid .listing .detail .meta-listing .post-meta {
  margin-bottom: 15px;
}
.banner-add {
  text-align: center;
  width: 100%;
  margin-bottom: 40px;
}
.banner-add img {
  max-width: 100%;
}
.page-nav {
  width: 100%;
}
.recipe-set .listing-buttons {
  float: right;
  display: inline-block;
  background: #f8f6f5;
  overflow: hidden;
  position: relative;
  z-index: 6666 ;
  margin-bottom: 20px;
  padding-left: 20px;
}
.recipe-set .listing-buttons span {
  cursor: pointer;
  display: inline-block;
  text-align: center;
  width: 33px;
  height: 29px;
  line-height: 27px;
  border: 1px solid #e4d9d1;
  color: #9e938e;
  transition: 0.2s all ease-in-out;
}
.recipe-set .listing-buttons span:hover {
  background: #6ebe3b;
  border-color: #6ebe3b;
  color: #ffffff;
}
.recipe-set .listing-buttons .grid {
  margin-right: 3px;
}
.recipe-set .listing-buttons .current {
  background: #6ebe3b;
  border-color: #6ebe3b;
  color: #ffffff;
}
/*-----------------------------------------------------------------------------------*/
/* Listing list & grid ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* shortcodes
/*-----------------------------------------------------------------------------------*/
.shortcodes-wrapper h2 {
  font-family: 'Lato', sans-serif;
  font-weight: 900;
  font-size: 24px;
  text-transform: uppercase;
  font-style: normal;
}
.shortcodes-wrapper h3 {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  font-size: 18px;
  font-style: normal;
}
.bottom-short-line {
  position: relative;
  padding-bottom: 15px;
}
.bottom-short-line:after {
  content: "";
  display: inline-block;
  width: 50px;
  height: 3px;
  background: #6ebe3b;
  position: absolute;
  left: 0;
  bottom: 0;
}
.wrapper-columns {
  margin-bottom: 40px;
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 26px;
}
.typography {
  margin-bottom: 100px;
}
.typography h1,
.typography h2,
.typography h3,
.typography h4,
.typography h5,
.typography h6 {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  text-transform: none;
  font-style: normal;
}
.typography h1 {
  font-size: 36px;
}
.typography h2 {
  font-size: 30px;
}
.typography h3 {
  font-size: 24px;
}
.typography h4 {
  font-size: 18px;
}
.typography h5 {
  font-size: 16px;
}
.typography h6 {
  font-size: 14px;
}
.tab-container.tab-shortcode ul li.active {
  background: #c1452b;
}
.tab-container.tab-shortcode ul li.active a {
  color: #ffffff;
}
.tab-container.tab-shortcode ul li:hover {
  background: #c1452b;
}
.tab-container.tab-shortcode ul li:hover a {
  color: #ffffff;
}
.tab-container.tab-shortcode ul li a {
  border: none;
  font-weight: 700;
}
.tab-container.tab-shortcode .tab-content {
  padding: 25px;
}
.tab-container.tab-shortcode .tab-content p {
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 26px;
}
.accordion dt {
  background: #dddddd;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  text-transform: uppercase;
  line-height: 26px;
  padding: 13px 25px;
  cursor: pointer;
  transition: 0.2s all ease-in-out;
  margin-bottom: 11px;
}
.accordion dt.current {
  background: #c1452b;
  color: #ffffff;
  margin-bottom: 0;
}
.accordion dd {
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  font-size: 16px;
  background: #ffffff;
  line-height: 26px;
  padding: 20px;
  display: none;
}
.accordion dd:first-of-type {
  display: block;
}
.alert {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  padding: 18px 20px;
  margin-bottom: 24px;
  position: relative;
}
.alert.green {
  background: #d0eec4;
  color: #3c763d;
}
.alert.blue {
  background: #c6e5f4;
  color: #31709c;
}
.alert.yellow {
  background: #fbf2c5;
  color: #8a6d3b;
}
.alert.red {
  background: #f6cfcf;
  color: #b84442;
}
.alert .close-alert {
  position: absolute;
  display: inline-block;
  right: 10px;
  top: 5px;
  cursor: pointer;
}
.default-btn {
  display: inline-block;
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  font-size: 16px;
  text-transform: capitalize;
  padding-top: 8px;
  padding-bottom: 8px;
  margin-right: 5px;
  margin-bottom: 8px;
  border: 1px solid transparent;
}
.default-btn.theme-color {
  background: #6ebe3b;
  color: #ffffff;
}
.default-btn.theme-tag-color {
  background: #c1452b;
  color: #ffffff;
}
.default-btn.light-color {
  background: #a1a1a1;
  color: #ffffff;
}
.default-btn.dark-color {
  background: #000000;
  color: #ffffff;
}
.default-btn.dark-color:hover {
  background: #ffffff;
  border-color: #000000;
  color: #000000;
}
.default-btn.theme-color:hover,
.default-btn.theme-tag-color:hover,
.default-btn.light-color:hover {
  background: #000000;
  color: #ffffff;
}
.default-btn.theme-border {
  border-color: #6ebe3b;
}
.default-btn.theme-border:hover {
  background: #6ebe3b;
}
.default-btn.tag-border {
  border-color: #c1452b;
}
.default-btn.tag-border:hover {
  background: #c1452b;
}
.default-btn.light-border {
  border-color: #a1a1a1;
}
.default-btn.light-border:hover {
  background: #a1a1a1;
}
.default-btn.dark-border {
  border-color: #000000;
}
.default-btn.dark-border:hover {
  background: #000000;
}
.default-btn.theme-border:hover,
.default-btn.tag-border:hover,
.default-btn.light-border:hover,
.default-btn.dark-border:hover {
  color: #ffffff;
}
.small-button {
  padding-left: 19px;
  padding-right: 19px;
}
.mid-button {
  padding-left: 25px;
  padding-right: 25px;
}
.min-width-button {
  min-width: 193px;
  text-align: center;
  padding-left: 20px;
  padding-right: 20px;
}
.slider-left.shortcodes-slider {
  width: 100%;
  height: auto;
  margin-bottom: 50px;
}
.wrapper-slider-detail {
  position: relative;
}
.wrapper-slider-detail .top-slider .shortcode-arrows.wider {
  position: absolute;
  opacity: 0;
  width: 100%;
  left: 0;
  top: 50%;
  margin-top: -80px;
  -webkit-transition: all 300ms ease-in-out;
  -moz-transition: all 300ms ease-in-out;
  -ms-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.wrapper-slider-detail .top-slider .shortcode-arrows.wider span {
  display: block !important;
  position: absolute;
  height: 65px;
  width: 39px;
  line-height: 65px;
  text-align: center;
  cursor: pointer;
  transition: 0.2s all ease-in-out;
  background: #3d3432;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  color: #736e6b;
}
.wrapper-slider-detail .top-slider .shortcode-arrows.wider span:hover {
  background-color: #28211f;
}
.wrapper-slider-detail .top-slider .shortcode-arrows.wider span.left-arrow {
  left: 0;
}
.wrapper-slider-detail .top-slider .shortcode-arrows.wider span.right-arrow {
  right: 0;
}
.wrapper-slider-detail .top-slider:hover .shortcode-arrows {
  opacity: 1;
}
.wrapper-slider-detail .shortcode-slider-thumb {
  position: absolute;
  left: 0;
  bottom: 0;
  z-index: 500;
  height: 102px;
  width: 100%;
  padding: 24px 50px;
  background-color: rgba(0, 0, 0, 0.8);
}
.wrapper-slider-detail .shortcode-slider-thumb .shortcode-arrows {
  position: absolute;
  opacity: 0;
  width: 100%;
  left: 0;
  top: 45px;
  margin-top: 0;
  -webkit-transition: all 300ms ease-in-out;
  -moz-transition: all 300ms ease-in-out;
  -ms-transition: all 300ms ease-in-out;
  -o-transition: all 300ms ease-in-out;
  transition: all 300ms ease-in-out;
}
.wrapper-slider-detail .shortcode-slider-thumb .shortcode-arrows span {
  position: absolute;
  display: block !important;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background: none;
  color: #aaaaaa;
  cursor: pointer;
}
.wrapper-slider-detail .shortcode-slider-thumb .shortcode-arrows span.left-arrow {
  left: 18px;
}
.wrapper-slider-detail .shortcode-slider-thumb .shortcode-arrows span.right-arrow {
  right: 18px;
}
.wrapper-slider-detail .shortcode-slider-thumb:hover .shortcode-arrows {
  opacity: 1;
}
.wrapper-slider-detail .shortcode-slider-thumb ul li {
  opacity: 0.8;
  margin-right: 19px;
}
.wrapper-slider-detail .shortcode-slider-thumb ul li.flex-active-slide {
  opacity: 1;
}
/*-----------------------------------------------------------------------------------*/
/* shortcodes ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* submit recipe
/*-----------------------------------------------------------------------------------*/
.submit-recipe-set {
  overflow: visible;
}
.submit-recipe-set h2 {
  overflow: hidden;
}
.submit-recipe-form {
  background: #ffffff;
  padding: 30px 25px 60px;
}
.submit-recipe-form input,
.submit-recipe-form textarea {
  outline: none;
  border: 1px solid #e4d9d1;
  margin-bottom: 30px;
}
.submit-recipe-form textarea {
  resize: none;
  width: 100%;
  padding: 10px;
}
.submit-recipe-form label {
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  font-size: 16px;
  color: #514b49;
  margin-bottom: 10px;
}
.submit-recipe-form input[type="text"] {
  width: 100%;
  height: 40px;
  padding-left: 20px;
  padding-right: 20px;
}
.submit-recipe-form #upload-image {
  border: none;
}
.submit-recipe-form .radio-btn {
  margin-top: 0;
  margin-bottom: 0;
  margin-right: 8px;
  vertical-align: middle;
}
.submit-recipe-form .radio-text {
  vertical-align: middle;
  text-transform: capitalize;
  margin-right: 20px;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
}
.submit-recipe-form .selectric-wrapper {
  margin-bottom: 20px;
}
.submit-recipe-form .recipe-submit-btn {
  font-family: 'Lora', serif;
  font-style: italic;
  font-weight: 400;
  font-size: 16px;
  background: #6ebe3b;
  color: #ffffff;
  border: none;
  padding: 10px 25px;
  margin-top: 40px;
  transition: 0.2s all ease-in-out;
}
.submit-recipe-form .recipe-submit-btn:hover {
  background: #000000;
}
.submit-recipe-form .short-text {
  height: 80px;
}
.add-fields {
  display: flex;
}
.add-fields input,
.add-fields textarea {
  flex: 1;
}
.add-button {
  float: right;
  display: inline-block;
  height: 40px;
  line-height: 40px;
  width: 45px;
  text-align: center;
  color: #ffffff;
  font-size: 16px;
  transition: 0.2s all ease-in-out;
  cursor: pointer;
  background: #6ebe3b;
}
.add-button:hover {
  background: #000000;
}
.list-sortable li {
  position: relative;
  margin-bottom: 20px;
}
.list-sortable li input,
.list-sortable li textarea {
  margin-bottom: 0;
}
.list-sortable .detail-placeholder {
  background-color: #6ebe3b;
  opacity: .2;
}
.list-sortable .handler-list {
  border-right: none;
}
.list-sortable .del-list {
  border-left: none;
}
.visible-overflow {
  overflow-x: visible;
}
.handler-list,
.del-list {
  display: inline-block;
  width: 45px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  cursor: pointer;
  border: 1px solid #e4d9d1;
}
.handler-list:hover,
.del-list:hover {
  background: #e4d9d1;
}
/*-----------------------------------------------------------------------------------*/
/* submit recipe ends
/*-----------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* Responsive Stylesheets
/*-----------------------------------------------------------------------------------*/
@media (min-width: 992px) and (max-width: 1199px) {
  .header-main {
    text-align: center;
  }
  .header-main .logo-wrapper {
    margin-bottom: 40px;
  }
  .header-main .outer-nav {
    text-align: center;
  }
  .slider-left,
  .slider-right {
    height: 433px;
  }
  .slider-right .slide-detail {
    height: 433px;
  }
  .slider-right .slide-detail .box1 {
    padding-top: 20px;
  }
  .slider-right .slide-detail .box1 h2 {
    font-size: 21px;
  }
  .slider-right .food-category {
    margin-bottom: 10px;
  }
  .slider-right .post-meta {
    margin-bottom: 30px;
  }
  .search-box {
    margin-right: 25px;
  }
  .intro h3 {
    margin-top: 20px;
    font-size: 18px;
  }
  .text-side,
  .image-side {
    width: 50%;
  }
  .footer-variant-one .footer-inner {
    padding-left: 35px;
    padding-right: 35px;
  }
  .news-single .news-visuals {
    height: 151px;
  }
  .chef-team .chef-detail-inner {
    padding: 5px 20px;
  }
  .chef-team .chef-detail .type {
    margin-bottom: 10px;
  }
  .chef-team .chef-detail .social-icons-chef {
    margin-top: 0;
  }
  .wrapper-home-slider.variation-two .slide-detail-inner {
    padding: 12px;
  }
  .wrapper-home-slider.variation-two .slide-detail-inner h2 {
    margin-bottom: 20px;
  }
  .wrapper-home-slider.variation-two .slide-detail-inner .short-separator {
    margin-bottom: 0;
  }
  .hot-recipes-var2 .intro h3 {
    margin-top: 0;
    line-height: 24px;
  }
  .hot-recipes-var2 .intro p {
    line-height: 21px;
  }
  .top-nav ul li {
    margin-right: 20px;
  }
  .boxed-recipes .recipe-single {
    width: 47%;
  }
  .wrapper-slider-nav {
    height: 61px;
    margin-top: -61px;
  }
  .slider-recipe-detail .recipe-specs li .count {
    font-size: 20px;
  }
  .slider-recipe-detail .recipe-specs li .count span {
    font-size: 19px;
  }
  .recipe-specs-2 li {
    font-size: 14px;
    min-width: 123px;
  }
  .listing .meta-listing {
    flex-direction: column;
  }
  .listing .meta-listing .post-meta {
    margin-bottom: 10px;
  }
  .listing .meta-listing .rating-box {
    text-align: left;
  }
  .listing-grid .listing {
    width: 47%;
  }
  .col-size,
  .split-images-inner {
    height: 304px;
  }
  .container-hot-recipes .icon-container {
    width: 18px;
  }
  .container-hot-recipes .post-meta.recipe {
    margin-bottom: 10px;
  }
  .recipe-box p {
    line-height: 21px;
  }
  .intro h3 {
    line-height: 26px;
  }
  .homo-4-col .video-post {
    height: 149px;
  }
  .hot-recipes-var2 .intro h3 {
    font-size: 14px;
    margin-bottom: 5px;
  }
  .hot-recipes-var2 .intro p {
    margin-bottom: 5px;
  }
  .hot-recipes-var2 .intro .short-separator {
    display: none;
  }
}
@media (max-width: 991px) {
  .logo-wrapper {
    margin-top: 40px;
    margin-bottom: 40px;
    text-align: center;
  }
  .wrapper-links {
    text-align: center !important;
  }
  .banner-header {
    margin-top: 30px;
  }
  .header-main {
    text-align: center;
  }
  .header-main .logo-wrapper {
    margin-bottom: 40px;
  }
  .header-main .outer-nav {
    text-align: center;
  }
  .header-main .sign-in-buttons {
    margin-bottom: 0;
  }
  .main-menu li {
    margin-left: 0;
  }
  .main-menu .submit-recipe {
    padding-top: 5px !important;
    padding-bottom: 5px !important;
  }
  .custom-arrows {
    display: none;
  }
  .submit-recipe {
    height: auto;
  }
  .slider-box {
    display: block;
  }
  .slider-box .slider-left,
  .slider-box .slider-right {
    width: 100%;
    height: auto;
  }
  .slider-right .slide-detail {
    height: auto;
  }
  .fluid-search-slider {
    background: linear-gradient(to bottom, #5eaa2e 66px, #6ebe3b 50%);
  }
  .search-option span {
    display: none;
  }
  .search-box {
    margin-right: 0;
    padding-right: 20px;
  }
  .search-box:after {
    display: none;
  }
  form.search-box-home {
    width: 100%;
  }
  form.search-box-home label {
    display: flex;
  }
  form.search-box-home label span {
    width: 50px;
    line-height: 34px;
  }
  form.search-box-home label input {
    width: 100%;
  }
  .hot-row {
    flex-direction: column;
  }
  .hot-row .col-size {
    width: 100%;
    height: 100%;
    margin-bottom: 30px;
  }
  .split-images-inner {
    height: auto;
  }
  .recipe-box .image img {
    height: 100%;
  }
  .good-food-box {
    flex-direction: column;
  }
  .text-side,
  .image-side {
    width: 100%;
  }
  .wrapper-chefs {
    flex-wrap: wrap;
  }
  .chef-single,
  .news-single {
    width: 50%;
    margin-bottom: 30px;
  }
  .recipe-button {
    text-align: left;
    margin-top: 15px;
  }
  .footer-variant-one .footer-inner {
    padding-left: 35px;
    padding-right: 35px;
  }
  .subs-social-options .custom-col-options {
    border: none;
  }
  .subs-social-options .left-side {
    padding-right: 0;
  }
  .right-side {
    padding-left: 0;
  }
  .wrapper-links {
    margin-bottom: 20px;
  }
  .news-single .news-visuals {
    height: 232px;
  }
  .single-recipe .recipe-detail .heading-bell.boxed:before,
  .single-recipe .recipe-detail .heading-bell.boxed:after {
    width: 40px;
  }
  .chefs-var1 .chef-single {
    width: 100%;
  }
  .homo-4-col .col-single {
    margin-bottom: 30px;
  }
  .all-chefs .head-chef {
    display: block;
  }
  .all-chefs .head-chef .left-side {
    width: 100%;
    display: block;
    text-align: center;
  }
  .all-chefs .head-chef .right-side {
    width: 100%;
    padding: 30px;
  }
  .wrapper-chef-team {
    margin-left: -5%;
  }
  .chef-team > li {
    width: 45%;
    margin-left: 5%;
  }
  .chef-team > li:nth-child(2n+1) {
    clear: both;
  }
  .chef-team > li:hover .chef-detail {
    width: 112%;
  }
  .wrapper-home-slider.variation-two .custom-container-slide {
    display: none;
  }
  .hot-recipes-var2 .intro-first .image {
    order: 1;
  }
  .hot-recipes-var2 .intro-first .intro {
    order: 2;
  }
  .hot-recipes-var2 .split-images-var2 .image {
    width: 40%;
  }
  .hot-recipes-var2 .split-images-var2 .intro {
    width: 60%;
  }
  .hot-recipes-var2 .split-images-var2 .intro .intro-inner {
    padding: 20px;
  }
  .custom-row-food-tabs,
  .custom-col-food-tabs {
    display: block;
  }
  .recipe-of-day {
    margin-bottom: 30px;
  }
  .footer-variant-two .wrapper-logo-detail .right-side {
    padding-top: 0;
  }
  .footer-social-icons {
    text-align: left;
    margin-top: 25px;
  }
  .footer-social-icons ul li {
    margin-left: 0;
    margin-right: 25px;
  }
  .widget-get-social ul {
    justify-content: flex-start;
  }
  .widget-get-social ul li {
    margin-right: 15px;
  }
  .banner-login-wrapper {
    text-align: center;
  }
  .banner-login-wrapper .wrapper-links {
    text-align: center;
  }
  .boxed-recipes .recipe-single {
    width: 47%;
  }
  #contact-form {
    padding-right: 0;
  }
  .wrapper-slider-nav {
    height: 70px;
    margin-top: -70px;
  }
  .listing-grid .listing {
    width: 47%;
  }
  .our-chefs .chef-single {
    width: 50%;
  }
  .homo-4-col .video-post {
    height: 242px;
  }
  .wrapper-bg-video {
    display: none;
  }
  .header-var1 .responsive-menu {
    display: block;
  }
  .header-var1 .nav-collapse {
    display: none;
  }
  .widget-overlay figure img {
    max-width: 100%;
    width: auto;
  }
}
@media (max-width: 767px) {
  .news-single .news-visuals {
    height: 178px;
  }
  .single-recipe {
    margin-bottom: 30px;
  }
  .single-recipe .recipe-detail .heading-bell.boxed:before,
  .single-recipe .recipe-detail .heading-bell.boxed:after {
    width: 70px;
  }
  .comments-form label {
    width: 100%;
    float: none;
  }
  .comments-form input[type="text"],
  .comments-form input[type="email"],
  .comments-form textarea {
    width: 100%;
  }
  .comments-form input[type="submit"] {
    margin-left: 0;
  }
  .hot-recipes-var2 .hot-row {
    flex-direction: row;
  }
  .hot-recipes-var2 .split-images-var2 {
    width: 50%;
    padding: 10px;
  }
  .hot-recipes-var2 .split-images-var2 .inner-split {
    flex-direction: column;
  }
  .hot-recipes-var2 .split-images-var2 .common-split {
    display: block;
    width: 100%;
  }
  .recipe-of-day {
    min-height: 360px;
    overflow: hidden;
  }
  .recipe-of-day img {
    width: auto;
    height: 100%;
  }
  .recipe-of-day .recipe-contents {
    margin: auto;
  }
  .inner-advance-search {
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
  }
  .inner-advance-search .form-field {
    margin-bottom: 20px;
    width: 80%;
    margin-right: 0;
    flex: auto;
  }
  .inner-advance-search button {
    width: 80%;
  }
  .wrapper-slider-nav {
    height: auto;
    margin-top: 0;
  }
  .wrapper-recipe-heading {
    flex-direction: column;
  }
  .wrapper-recipe-heading .heading {
    width: 100%;
    margin-bottom: 20px;
  }
  .wrapper-recipe-heading .recipe-video {
    width: 100%;
  }
  .wrapper-recipe-heading .recipe-video .button-dark {
    display: inline-block;
    padding: 0 30px;
  }
  .recipe-detail-body .print-button {
    float: none;
    display: block;
    margin-bottom: 30px;
  }
  .ingredients-checkbox {
    flex-direction: column;
  }
  .ingredients-checkbox .ingredients {
    background-position: top right;
  }
  .ingredients-checkbox .ingredients,
  .ingredients-checkbox .nutritional {
    width: 100%;
  }
  .steps-list .step-image {
    float: none;
    width: auto;
  }
  .tags-icons .details-social-icons {
    text-align: left;
  }
  .listing {
    border: 1px solid #e4d9d1;
    flex-direction: column;
  }
  .listing .image,
  .listing .detail {
    width: auto;
  }
  .listing .detail .chef-social-links {
    text-align: left;
    margin: 20px 0 10px;
  }
  .listing .detail .chef-social-links li {
    margin-left: 0;
    margin-right: 15px;
  }
  .recipe-comments ul li ul {
    margin-left: 0;
  }
  .wrapper-recipe-heading .recipe-media {
    width: 100%;
    text-align: left !important;
  }
  .wrapper-recipe-heading .recipe-media a {
    display: inline-block;
  }
  .wrapper-recipe-heading .recipe-media .watch-video {
    padding: 0 20px;
  }
  .listing-grid .listing {
    width: 100%;
  }
  .listing-grid .listing .meta-listing .rating-box {
    text-align: center;
  }
  .recipe-of-day .recipe-contents-outer {
    position: relative;
    top: 0;
    left: 0;
  }
  .recipe-of-day .recipe-contents {
    max-width: 100%;
    width: 100%;
  }
  .homo-4-col .video-post {
    height: auto;
  }
  .comments-list li .gravatar {
    margin-bottom: 20px;
    float: none;
  }
  .comments-list li ul {
    margin-left: 0;
  }
}
@media (max-width: 600px) {
  .recipe-box {
    flex-direction: column;
    margin-bottom: 50px;
    width: 100%;
  }
  .recipe-box .intro {
    order: 2;
  }
  .recipe-box .intro,
  .recipe-box .image {
    width: 100%;
  }
  .hot-row .col-size {
    margin-bottom: 0;
  }
  .hot-row .full-image {
    margin-bottom: 50px;
  }
  .container-tags ul {
    display: block;
    float: none;
    padding-top: 20px;
  }
  .container-tags ul li {
    margin-left: 0;
    margin-right: 30px;
    margin-bottom: 20px;
  }
  .news-single .news-visuals {
    height: 146px;
  }
  .wrapper-chef-team {
    margin-left: auto;
  }
  .chef-team > li {
    width: 75%;
    margin-left: auto;
    margin-right: auto;
  }
  .chef-team .chef-detail {
    width: 100%;
  }
  .chef-team > li {
    float: none;
  }
  .chef-team > li .chef-detail {
    right: auto;
    left: 0 !important;
  }
  .chef-team > li .chef-detail:before {
    display: none;
  }
  .chef-team > li:hover .chef-detail {
    right: auto;
    left: 0;
  }
  .slider-recipe-detail {
    flex-direction: column;
  }
  .slider-recipe-detail .wrapper-slider-detail,
  .slider-recipe-detail .recipe-specs {
    width: 100%;
  }
  .slider-recipe-detail .recipe-specs {
    flex-direction: row;
    flex-wrap: wrap;
  }
  .slider-recipe-detail .recipe-specs li {
    padding: 10px 0;
    min-width: 100px;
    border: 1px solid #e4d9d1 ;
    margin-left: -1px;
    margin-top: -1px;
  }
  .listing .meta-listing {
    flex-direction: column;
  }
  .listing .meta-listing .post-meta {
    margin-bottom: 10px;
  }
  .listing .meta-listing .rating-box {
    text-align: left;
  }
  .chef-team > li:hover .chef-detail {
    width: auto;
  }
}
@media (max-width: 500px) {
  .recipe-banner {
    padding-left: 25px;
  }
  .recipe-banner img {
    position: relative;
    left: 0;
    margin-bottom: 25px;
    max-width: 100%;
  }
  .news-single {
    width: 100%;
  }
  .news-single .news-visuals {
    height: auto;
  }
  .custom-col-xxs {
    width: 100%;
  }
  .post-author {
    display: block;
  }
  .post-author .avatar {
    margin-bottom: 20px;
  }
  .post-author .avatar,
  .post-author .detail {
    width: auto;
  }
  .post-author .detail .social-icons {
    float: none;
  }
  .comments-list li .comment-inner {
    display: block;
  }
  .comments-list li .comment-inner .gravator {
    width: auto;
    margin-bottom: 20px;
  }
  .comments-list li .comment-inner .detail {
    width: auto;
  }
  .comments-list li ul {
    margin-left: 0;
  }
  .hot-recipes-var2 .hot-row {
    flex-direction: column;
  }
  .hot-recipes-var2 .hot-row .col-size {
    margin-bottom: 30px;
  }
  .hot-recipes-var2 .split-images-var2 {
    width: 100%;
    padding: 0;
  }
  .boxed-recipes {
    justify-content: center;
  }
  .boxed-recipes .recipe-single {
    width: 90%;
  }
  .recipe-detail-body {
    padding: 25px 10px;
  }
  .recipe-comments .avatar {
    float: none;
  }
  .slider-recipe-detail2 .slider-video-button {
    position: relative;
    top: 0;
    right: 0;
    margin-top: 20px;
  }
  .tab-container ul {
    flex-direction: column;
  }
  .tab-container ul li {
    border-bottom: 1px solid #ffffff;
    width: 100%;
  }
  .our-chefs .chef-single {
    width: 100%;
  }
  .our-chefs .chef-single:hover img {
    transform: scale(1.05);
  }
}
@media (max-width: 400px) {
  .chef-single,
  .news-single {
    width: 100%;
  }
  .post-single .prev-next-links li {
    font-size: 11px;
    vertical-align: top;
  }
  .chef-team > li {
    width: 100%;
  }
  .chefs-card h2 {
    font-size: 22px;
  }
  .tabs-container .left-side,
  .tabs-container .right-side {
    width: 100%;
  }
  .tabs-container .left-side {
    margin-bottom: 10px;
  }
  .tabs-container .right-side {
    padding-left: 0;
  }
}
/*-----------------------------------------------------------------------------------*/
/* IE support
/*-----------------------------------------------------------------------------------*/
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  /* IE10+ CSS styles go here */
  .recipe-search .category-list ul li {
    padding-top: 5px;
    padding-bottom: 5px;
  }
  .recipe-search .category-list ul li a {
    transition: 0;
  }
  .search-carousel a {
    transition: 0;
  }
  .all-chefs .head-chef .right-side .expertise li a {
    transition: 0;
  }
  .latest-news-widget li .detail {
    flex: 1;
  }
  .listing-grid .listing .detail .meta-listing .post-meta,
  .listing-grid .listing .detail .meta-listing .rating-box {
    flex: auto;
  }
}
/*-----------------------------------------------------------------------------------*/
/* print stylesheet
/*-----------------------------------------------------------------------------------*/
@media print {
  .banner-login-wrapper,
  .buttons-steps,
  .top-nav,
  .banner,
  .slider-video-button,
  .advance-search,
  aside,
  .wrapper-slider-nav,
  .recipe-media,
  .tags-icons,
  .separator-post,
  .related-recipes,
  .chef-social-links,
  .comment-form,
  .footer {
    display: none;
  }
  .recipes-home-body.inner-page {
    padding-top: 0;
  }
  .recipe-detail-body {
    margin-bottom: 0;
  }
  .recipe-detail-body .print-button {
    display: none;
  }
  .recipe-steps {
    page-break-inside: avoid;
  }
  .tips-variations {
    page-break-inside: avoid;
    margin-bottom: 0;
  }
  .listing .image {
    display: none;
  }
  .recipe-comments {
    page-break-inside: avoid;
  }
  .slider-recipe-detail2 .slider-video-button {
    display: none;
  }
  .recipe-detail-body .rating-box {
    display: none;
  }
  .steps-detail .single-detail {
    border-bottom: 1px solid #c9d6bf;
  }
}

    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Food Recipe Website - Savory Secrets</title>
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/icons.css" rel="stylesheet" type="text/css">
    <link href="/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css"  />
    <link href="/css/flexslider.css" rel="stylesheet" type="text/css" />
    <link href="/css/owl.carousel.css" rel="stylesheet" type="text/css" >
    <!--[if lt IE 8]><!-->
    <link href="/ie7/ie7.css" rel="stylesheet" >
    <!--<![endif]-->
    <link href="/css/home.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--jquery ui stylesheet-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- site favicon -->
    <link rel="icon" href="images/favicon.png" />

    <!--selectric stylesheet-->
    <link rel="stylesheet" href="css/selectric.css"/>
    <!--font awesome stylesheet-->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <!--swipe box stylesheet-->
    <link rel="stylesheet" href="css/swipebox.css"/>
    <!-- mean menu stylesheet-->
    <link rel="stylesheet" href="css/meanmenu.css"/>
    <!--slick slider stylesheet-->
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css"/>
    <!--bootstrap stylesheets-->
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <!--animate stylesheet-->
    <link rel="stylesheet" href="css/animate.css"/>
    <!--main stylesheet-->
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body>


<!--header-->
<header>
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 address">
                        
                    </div>
                    <div class="col-sm-6 social">
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        Food<span>Recipe</span>
                    </a>
                    @if(auth()->check())
                        <p><span class="user-name"><b>{{ auth()->user()->username }}</b></span></p>
                    @endif
                </div>
                <div class="collapse navbar-collapse navbar-main-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <li>
                            <a href="/user_home">Home</a>
                        </li>
                        <li>
                            <a href="/submit-recipe">Submit Recipe</a>
                        </li>
                        <li>
                            <a href="/my-recipe">My Recipes</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<!--header ends-->

<!--banner-->
<div class="clear"></div>
    <div id="page-content">

<div class="banner banner-blog">
    <div class="container ">
        <div class="main-heading">
            <h1>Submit Recipe</h1>
        </div>

    </div>
</div>

<!--banner ends-->


<div class="recipes-home-body inner-page">
<div class="container">
<div class="row">
<div class="col-md-8 col-lg-9">
    <div class="recipe-set submit-recipe-set">
        <h2>Edit Recipe</h2>
        <p>Food Recipe theme include a Recipe Submit Template. It allow users to submit a recipe with featured image and related details. A user
            should be logged in to submit a recipe. </p>

        <div class="submit-recipe-form">
        @if ($errors->any())
            <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
        </div>
        @endif
        <form method="POST" action="{{ route('update-recipe', ['id' => $recipe->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="title">Recipe Title</label>
                <input type="text" name="title" id="title" value="{{ $recipe->title }}" required>
                <br/>
                <label for="short-description">Short Description</label>
                <textarea class="short-text" name="short-des" id="short-description" cols="30" rows="10" required>{{ $recipe->short_description }}</textarea>
                <label for="recipe-content">Recipe Contents</label>
                <textarea name="content" id="recipe-content" cols="30" rows="10">{{ $recipe->content }}</textarea>
                <label for="upload-image">Upload Images</label>
                <input type="file" name="fileUpload" id="upload-image">
                <fieldset class="ingredient-set">
                    <label for="ingredients">Ingredients</label>
                    <ul class="list-sortable ingredients-list">
                    @foreach ($recipe->ingredients as $index => $ingredient)

                        <li>
                            <div class="add-fields">
                                <span class="handler-list"><i class="fa fa-arrows"></i></span>
                                <input type="text" name="ingredients[{{ $index }}]" value="{{ $ingredient }}"  id="ingredients"/>
                                <span class="del-list"><i class="fa fa-trash delete-ingredient"></i></span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                                         <span class="add-button add-ing" id="add-ingredient">
                                            <i class="fa fa-plus"></i>
                                        </span>
                </fieldset>

                <fieldset class="ingredient-set">
                    <label for="steps">Steps</label>
                    <ul class="list-sortable steps">
                    @foreach ($recipe->steps as $index => $step)

                        <li>
                            <div class="add-fields">
                                <span class="handler-list"><i class="fa fa-arrows"></i></span>
                                <textarea class="short-text" name="steps[{{ $index }}]" id="steps[]" cols="30" rows="10">{{ $step }}</textarea>
                                <span class="del-list"><i class="fa fa-trash delete-step"></i></span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                                         <span class="add-button add-steps" id="add-step">
                                            <i class="fa fa-plus"></i>
                                        </span>
                </fieldset>

                <label class="video-based-recipe">Video Based Recipe</label>
                <br/>
                <label for="radio-yes">
                    <input class="radio-btn" id="radio-yes" type="radio" name="video-recipe" value="{{ $recipe->vide_recipe }}"  /><span class="radio-text">yes</span>
                </label>
                <label for="radio-no">
                    <input class="radio-btn" id="radio-no" type="radio" name="video-recipe" value="no"  /> <span class="radio-text">no</span>
                </label>
                <br/>
                <br/>
                <label for="video-embed">Video Embed Code</label>
                <textarea class="short-text" name="embed-code" value="{{ $recipe->viedo_embeded_code }}" id="video-embed" cols="30" rows="10"></textarea>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="yield">Yield</label>
                        <input type="text" name="yield" value="{{ $recipe->yield }}" id="yield"/>
                    </div>
                    <div class="col-sm-6">
                        <label for="servings">Servings</label>
                        <input type="text" name="servings" value="{{ $recipe->servings }}" id="servings"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <label for="prep-time">Preparation Time</label>
                        <input type="text" name="prep-time" value="{{ $recipe->prep_time }}" id="prep-time"/>
                    </div>
                    <div class="col-sm-4">
                        <label for="cook-time">Cook Time</label>
                        <input type="text" name="cook-time" value="{{ $recipe->cook_time }}" id="cook-time"/>
                    </div>
                    <div class="col-sm-4">
                        <label for="ready-in">Ready In</label>
                        <input type="text" name="ready-in" value="{{ $recipe->ready_in }}" id="ready-in"/>
                    </div>
                </div>

                <label for="tags">Tags</label>
                <input type="text" name="tags" value="{{ $recipe->tags }}" id="tags"/>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="recipe-type">Recipe Type</label>
                        <select name="recipe-type" id="recipe-type" value="{{ $recipe->recipe_type }}" class="advance-selectable">
                            <option value="t0" selected="selected">None</option>
                            <option value="t1">Breakfast</option>
                            <option value="t2">Lunch</option>
                            <option value="t3">Dinner</option>
                            <option value="t4">Dessert</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="cuisine-select">Cuisine</label>
                        <select name="cuisine" id="cuisine-select" value="{{ $recipe->cuisine }}" class="advance-selectable">
                            <option value="c0" selected="selected">None</option>
                            <option value="c1">Indian</option>
                            <option value="c2">Chinese</option>
                            <option value="c3">Italian</option>
                            <option value="c4">European</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="course-select">Course</label>
                        <select name="course" id="course-select" value="{{ $recipe->course }}" class="advance-selectable">
                            <option value="cr0" selected="selected">None</option>
                            <option value="cr1">Soup</option>
                            <option value="cr2">Salad</option>
                            <option value="cr3">Entree</option>
                            <option value="cr4">Dessert</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="skill">Skill Level</label>
                        <select name="skill" id="skill" value="{{ $recipe->skill }}" class="advance-selectable">
                            <option value="s0" selected="selected">None</option>
                            <option value="s1">Easy</option>
                            <option value="s2">Medium</option>
                            <option value="s3">Professional</option>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="recipe-submit-btn">Submit Your Recipe</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>

</div>
</div>

<!--footer-->
<div class="footer footer-variant-one footer-fluid">
    <div class="container">
        <div class="footer-inner">
            <div class="text-center">
                <a class="logo-footer wow animated zoomIn" href="index.html"><img src="" ></a>
                <p class="wow animated flipInX">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                    <br/>
                    magna aliquyam erat, with an extra ordinary design and quality development features in low
                </p>

            </div>

            <div class="subs-social-options">
                <div class="row custom-row-footer">
                    <div class="col-md-6 custom-col-options">
                        <div class="left-side">
                            <div class="widget widget-footer news-letter-signup wow animated flipInY">
                                <h2>Newsletter Signup</h2>

                                <form class="subs-form" action="#" method="post">
                                    <div class="email-field">
                                        <input type="email" name="email" placeholder="Enter you email address"/>
                                        <button><i class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="right-side">
                            <div class="widget widget-footer social-icons">
                                <h2 class="wow animated fadeInRight">Get Social with Us</h2>
                                <ul>
                                    <li class="wow animated bounceInRight"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay100ms"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay200ms" ><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay300ms"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay400ms" ><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay500ms"><a href="#"><i class="fa fa-flickr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center wow animated flipInX">
                <p>&copy; Copyright 2015 All Rights Reserved by <a href="#">Majestic Themes</a></p>
            </div>
            <div class="corner-image wow animated fadeInRight">
                <img src="images/footer-corner-image.jpg" alt="image"/>
            </div>
        </div>
    </div>
</div>
<!--footer ends-->

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.meanmenu.js"></script>
<script src="js/jquery.selectric.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.swipebox.js"></script>
<script src="js/custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="/js/jquery.flexslider-min.js"></script>
<script src="/js/easyResponsiveTabs.js"></script>
<script src="/js/owl.carousel.js"></script>
<script src="/js/custom.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addStepButton = document.getElementById('add-step');
        const stepsList = document.querySelector('.list-sortable.steps');

        // Add new step
        addStepButton.addEventListener('click', function() {
            const newStepItem = document.createElement('li');
            newStepItem.innerHTML = `
                <div class="add-fields">
                    <span class="handler-list"><i class="fa fa-arrows"></i></span>
                    <textarea class="short-text" name="steps[]" cols="30" rows="10"></textarea>
                    <span class="del-list"><i class="fa fa-trash delete-step"></i></span>
                </div>
            `;
            stepsList.appendChild(newStepItem);
        });

        // Delete step
        stepsList.addEventListener('click', function(event) {
            if (event.target.classList.contains('delete-step')) {
                const stepItem = event.target.closest('li');
                stepItem.remove();
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addIngredientButton = document.getElementById('add-ingredient');
        const ingredientsList = document.querySelector('.list-sortable.ingredients-list');

        // Add new ingredient
        addIngredientButton.addEventListener('click', function() {
            const newIngredientItem = document.createElement('li');
            newIngredientItem.innerHTML = `
                <div class="add-fields">
                    <span class="handler-list"><i class="fa fa-arrows"></i></span>
                    <input type="text" name="ingredients[]" />
                    <span class="del-list"><i class="fa fa-trash delete-ingredient"></i></span>
                </div>
            `;
            ingredientsList.appendChild(newIngredientItem);
        });

        // Delete ingredient
        ingredientsList.addEventListener('click', function(event) {
            if (event.target.classList.contains('delete-ingredient')) {
                const ingredientItem = event.target.closest('li');
                ingredientItem.remove();
            }
        });
    });
</script>

</body>
</html>