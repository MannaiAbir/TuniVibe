O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"C:\Users\riadh.chawachi\Desktop\TuniVibe-abir - Copie\assets\content\css\templatemo-topic-listing.css";s:10:"publicPath";s:81:"/assets/content/css/templatemo-topic-listing-36f1459f35725f14f2b2d61605752991.css";s:23:"publicPathWithoutDigest";s:48:"/assets/content/css/templatemo-topic-listing.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:26779:"/*

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

*/

/*---------------------------------------
  CUSTOM PROPERTIES ( VARIABLES )             
-----------------------------------------*/
:root {
  --white-color:                  #ffffff;
  --primary-color:                #13547a;
  --secondary-color:              #80d0c7;
  --section-bg-color:             #f0f8ff;
  --custom-btn-bg-color:          #80d0c7;
  --custom-btn-bg-hover-color:    #13547a;
  --dark-color:                   #000000;
  --p-color:                      #717275;
  --border-color:                 #7fffd4;
  --link-hover-color:             #13547a;

  --body-font-family:             'Open Sans', sans-serif;
  --title-font-family:            'Montserrat', sans-serif;

  --h1-font-size:                 58px;
  --h2-font-size:                 46px;
  --h3-font-size:                 32px;
  --h4-font-size:                 28px;
  --h5-font-size:                 24px;
  --h6-font-size:                 22px;
  --p-font-size:                  20px;
  --menu-font-size:               14px;
  --btn-font-size:                18px;
  --copyright-font-size:          16px;

  --border-radius-large:          100px;
  --border-radius-medium:         20px;
  --border-radius-small:          10px;

  --font-weight-normal:           400;
  --font-weight-medium:           500;
  --font-weight-semibold:         600;
  --font-weight-bold:             700;
}

body {
  background-color: var(--white-color);
  font-family: var(--body-font-family); 
}


/*---------------------------------------
  TYPOGRAPHY               
-----------------------------------------*/

h2,
h3,
h4,
h5,
h6 {
  color: var(--dark-color);
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: var(--title-font-family); 
  font-weight: var(--font-weight-semibold);
}

h1 {
  font-size: var(--h1-font-size);
  font-weight: var(--font-weight-bold);
}

h2 {
  font-size: var(--h2-font-size);
  font-weight: var(--font-weight-bold);
}

h3 {
  font-size: var(--h3-font-size);
}

h4 {
  font-size: var(--h4-font-size);
}

h5 {
  font-size: var(--h5-font-size);
}

h6 {
  color: var(--primary-color);
  font-size: var(--h6-font-size);
}

p {
  color: var(--p-color);
  font-size: var(--p-font-size);
  font-weight: var(--font-weight-normal);
}

ul li {
  color: var(--p-color);
  font-size: var(--p-font-size);
  font-weight: var(--font-weight-normal);
}

a, 
button {
  touch-action: manipulation;
  transition: all 0.3s;
}

a {
  display: inline-block;
  color: var(--primary-color);
  text-decoration: none;
}

a:hover {
  color: var(--link-hover-color);
}

b,
strong {
  font-weight: var(--font-weight-bold);
}


/*---------------------------------------
  SECTION               
-----------------------------------------*/
.section-padding {
  padding-top: 100px;
  padding-bottom: 100px;
}

.section-bg {
  background-color: var(--section-bg-color);
}

.section-overlay {
  background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
  position: absolute;
  top: 0;
  left: 0;
  pointer-events: none;
  width: 100%;
  height: 100%;
  opacity: 0.85;
}

.section-overlay + .container {
  position: relative;
}

.tab-content {
  background-color: var(--white-color);
  border-radius: var(--border-radius-medium);
}

.nav-tabs {
  border-bottom: 1px solid #ecf3f2;
  margin-bottom: 40px;
  justify-content: center;
}

.nav-tabs .nav-link {
  border-radius: 0;
  border-top: 0;
  border-right: 0;
  border-left: 0;
  color: var(--p-color);
  font-family: var(--title-font-family);
  font-size: var(--btn-font-size);
  font-weight: var(--font-weight-medium);
  padding: 15px 25px;
  transition: all 0.3s;
}

.nav-tabs .nav-link:first-child {
  margin-right: 20px;
}

.nav-tabs .nav-item.show .nav-link, 
.nav-tabs .nav-link.active,
.nav-tabs .nav-link:focus, 
.nav-tabs .nav-link:hover {
  border-bottom-color: var(--primary-color);
  color: var(--primary-color);
}


/*---------------------------------------
  CUSTOM ICON COLOR               
-----------------------------------------*/
.custom-icon {
  color: var(--secondary-color);
}


/*---------------------------------------
  CUSTOM BUTTON               
-----------------------------------------*/
.custom-btn {
  background: var(--custom-btn-bg-color);
  border: 2px solid transparent;
  border-radius: var(--border-radius-large);
  color: var(--white-color);
  font-size: var(--btn-font-size);
  font-weight: var(--font-weight-semibold);
  line-height: normal;
  transition: all 0.3s;
  padding: 10px 20px;
}

.custom-btn:hover {
  background: var(--custom-btn-bg-hover-color);
  color: var(--white-color);
}

.custom-border-btn {
  background: transparent;
  border: 2px solid var(--custom-btn-bg-color);
  color: var(--custom-btn-bg-color);
}

.custom-border-btn:hover {
  background: var(--custom-btn-bg-color);
  border-color: transparent;
  color: var(--white-color);
}

.custom-btn-bg-white {
  border-color: var(--white-color);
  color: var(--white-color);
}


/*---------------------------------------
  SITE HEADER              
-----------------------------------------*/
.site-header {
  background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
  padding-top: 150px;
  padding-bottom: 80px;
}

.site-header .container {
  height: 100%;
}

.breadcrumb-item+.breadcrumb-item::before,
.breadcrumb-item a:hover,
.breadcrumb-item.active {
  color: var(--white-color);
}

.site-header .custom-icon {
  color: var(--white-color);
  font-size: var(--h4-font-size);
}

.site-header .custom-icon:hover {
  color: var(--secondary-color);
}


/*---------------------------------------
  NAVIGATION              
-----------------------------------------*/
.sticky-wrapper {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
}

.sticky-wrapper.is-sticky .navbar {
  background-color: var(--secondary-color);
}

.navbar {
  background: transparent;
  border-bottom: 1px solid rgba(128, 208, 199, 0.35);
  z-index: 9;
}

.navbar-brand,
.navbar-brand:hover {
  font-size: var(--h3-font-size);
  font-weight: var(--font-weight-bold);
  display: block;
}

.navbar-brand span {
  font-family: var(--title-font-family);
}

.navbar-expand-lg .navbar-nav .nav-link {
  border-radius: var(--border-radius-large);
  margin: 10px;
  padding: 10px;
}

.navbar-nav .nav-link {
  display: inline-block;
  color: var(--white-color);
  font-family: var(--title-font-family); 
  font-size: var(--menu-font-size);
  font-weight: var(--font-weight-medium);
  text-transform: uppercase;
  letter-spacing: 0.5px;
  position: relative;
  padding-top: 15px;
  padding-bottom: 15px;
}

.navbar-nav .nav-link.active, 
.navbar-nav .nav-link:hover {
  color: var(--primary-color);
}

.navbar .dropdown-menu {
  background: var(--white-color);
  box-shadow: 0 1rem 3rem rgba(0,0,0,.175);
  border: 0;
  display: inherit;
  opacity: 0;
  min-width: 9rem;
  margin-top: 20px;
  padding: 13px 0 10px 0;
  transition: all 0.3s;
  pointer-events: none;
}

.navbar .dropdown-menu::before {
  content: "";
  width: 0;
  height: 0;
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  border-bottom: 15px solid var(--white-color);
  position: absolute;
  top: -10px;
  left: 10px;
}

.navbar .dropdown-item {
  display: inline-block;
  color: var(--p-bg-color);
  font-family: var(--title-font-family); 
  font-size: var(--menu-font-size);
  font-weight: var(--font-weight-medium);
  text-transform: uppercase;
  letter-spacing: 0.5px;
  position: relative;
}

.navbar .dropdown-item.active, 
.navbar .dropdown-item:active,
.navbar .dropdown-item:focus, 
.navbar .dropdown-item:hover {
  background: transparent;
  color: var(--primary-color);
}

.navbar .dropdown-toggle::after {
  content: "\f282";
  display: inline-block;
  font-family: bootstrap-icons !important;
  font-size: var(--copyright-font-size);
  font-style: normal;
  font-weight: normal !important;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  vertical-align: -.125em;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  left: 2px;
  border: 0;
}

@media screen and (min-width: 992px) {
  .navbar .dropdown:hover .dropdown-menu {
    opacity: 1;
    margin-top: 0;
    pointer-events: auto;
  }
}

.navbar-icon {
  background: var(--white-color);
  border-radius: var(--border-radius-large);
  display: inline-block;
  font-size: var(--h5-font-size);
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  transition: all 0.3s ease;
}

.navbar-icon:hover {
  background: var(--primary-color);
  color: var(--white-color);
}

.navbar-toggler {
  border: 0;
  padding: 0;
  cursor: pointer;
  margin: 0;
  width: 30px;
  height: 35px;
  outline: none;
}

.navbar-toggler:focus {
  outline: none;
  box-shadow: none;
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
  background: transparent;
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before,
.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
  transition: top 300ms 50ms ease, -webkit-transform 300ms 350ms ease;
  transition: top 300ms 50ms ease, transform 300ms 350ms ease;
  transition: top 300ms 50ms ease, transform 300ms 350ms ease, -webkit-transform 300ms 350ms ease;
  top: 0;
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before {
  transform: rotate(45deg);
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
  transform: rotate(-45deg);
}

.navbar-toggler .navbar-toggler-icon {
  background: var(--white-color);
  transition: background 10ms 300ms ease;
  display: block;
  width: 30px;
  height: 2px;
  position: relative;
}

.navbar-toggler .navbar-toggler-icon:before,
.navbar-toggler .navbar-toggler-icon:after {
  transition: top 300ms 350ms ease, -webkit-transform 300ms 50ms ease;
  transition: top 300ms 350ms ease, transform 300ms 50ms ease;
  transition: top 300ms 350ms ease, transform 300ms 50ms ease, -webkit-transform 300ms 50ms ease;
  position: absolute;
  right: 0;
  left: 0;
  background: var(--white-color);
  width: 30px;
  height: 2px;
  content: '';
}

.navbar-toggler .navbar-toggler-icon::before {
  top: -8px;
}

.navbar-toggler .navbar-toggler-icon::after {
  top: 8px;
}










/* Aligner les boutons Login et Register à droite */
.navbar-nav {
  margin-left: auto;
  display: flex;

}

/* Changer la couleur du texte en noir */
.navbar-nav .nav-item a[href*="login"],
.navbar-nav .nav-item a[href*="home"],
.navbar-nav .nav-item a[href*="register"] {
    color: black !important;
}

/* Changer la couleur au survol si nécessaire */
.navbar-nav .nav-item a[href*="login"]:hover,
.navbar-nav .nav-item a[href*="register"]:hover {
    color: #333 !important;
}





/*---------------------------------------
  HERO        
-----------------------------------------*/
.hero-section {
  background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
  position: relative;
  overflow: hidden;
  padding-top: 150px;
  padding-bottom: 150px;
}

.hero-section .input-group {
  background-color: var(--white-color);
  border-radius: var(--border-radius-large);
  padding: 10px 15px;
}

.hero-section .input-group-text {
  background-color: transparent;
  border: 0;
}

.hero-section input[type="search"] {
  border: 0;
  box-shadow: none;
  margin-bottom: 0;
  padding-left: 0;
}

.hero-section button[type="submit"] {
  background-color: var(--primary-color);
  border: 0;
  border-radius: var(--border-radius-large) !important;
  color: var(--white-color);
  max-width: 150px;
}


/*---------------------------------------
  TOPICS              
-----------------------------------------*/
.featured-section {
  background-color: var(--secondary-color);
  border-radius: 0 0 100px 100px;
  padding-bottom: 100px;
}

.featured-section .row {
  position: relative;
  bottom: 100px;
  margin-bottom: -100px;
}

.custom-block {
  border-radius: var(--border-radius-medium);
  position: relative;
  overflow: hidden;
  padding: 30px;
  transition: all 0.3s ease;
  height: 100%;
}

.custom-block:hover {
  background-color: var(--secondary-color);
  transform: translateY(-3px);
}

.custom-block > a {
  width: 100%;
}

.custom-block-image {
  display: block;
  width: 100%;
  height: 200px;
  object-fit: cover;
  margin-top: 35px;
}

.custom-block .rounded-pill {
  border-radius: 5px !important;
  display: flex;
  justify-content: center;
  text-align: center;
  width: 30px;
  height: 30px;
  line-height: 20px;
}

.custom-block-overlay {
  height: 100%;
  min-height: 350px;
  padding: 0;
}

.custom-block-overlay > a {
  height: 100%;
}

.custom-block-overlay .custom-block-image {
  border-radius: var(--border-radius-medium);
  display: block;
  height: 100%;
  margin-top: 0;
}

.custom-block-overlay-text {
  position: absolute;
  z-index: 2;
  top: 0;
  right: 0;
  left: 0;
  padding: 30px;
}

.social-share {
  position: absolute;
  bottom: 0;
  right: 0;
  left: 0;
  z-index: 2;
  padding: 20px 35px;
}

.social-share .bi-bookmark {
  color: var(--white-color);
  font-size: var(--h5-font-size);
}

.social-share .bi-bookmark:hover {
  color: var(--secondary-color);
}

.bg-design {
  background-color: #00B0FF;
}

.bg-graphic {
  background-color: #00BFA6;
}

.bg-advertising {
  background-color: #F50057;
}

.bg-finance {
  background-color: #536DFE;
}

.bg-music {
  background-color: #F9A826;
}

.bg-education {
  background-color: #00BFA6;
}


/*---------------------------------------
  TOPICS               
-----------------------------------------*/
.topics-detail-block {
  border-radius: var(--border-radius-medium);
  position: relative;
  overflow: hidden;
}

.topics-detail-block-image {
  display: block;
  border-radius: var(--border-radius-medium);
}

blockquote {
  background-color: var(--section-bg-color);
  border-radius: var(--border-radius-small);
  font-family: var(--title-font-family);
  font-size: var(--h4-font-size);
  font-weight: var(--font-weight-bold);
  display: inline-block;
  text-align: center;
  margin: 30px;
  padding: 40px;
}

.topics-listing-page .site-header {
  padding-bottom: 65px;
}

.custom-block-topics-listing-info {
  margin: 30px 20px 20px 30px;
}

.custom-block-topics-listing {
  height: inherit;
}

.custom-block-topics-listing .custom-block-image {
  width: 200px;
}


/*---------------------------------------
  PAGINATION              
-----------------------------------------*/
.pagination {
  margin-top: 40px;
}

.page-link {
  border: 0;
  border-radius: var(--border-radius-small);
  color: var(--p-color);
  font-family: var(--title-font-family);
  margin: 0 5px;
  padding: 10px 20px;
}

.page-link:hover,
.page-item:first-child .page-link:hover,
.page-item:last-child .page-link:hover {
  background-color: var(--secondary-color);
  color: var(--white-color);
}

.page-item:first-child .page-link {
  margin-right: 10px;
}

.page-item:first-child .page-link,
.page-item:last-child .page-link {
  background-color: var(--section-bg-color);
  border-radius: var(--border-radius-small);
}

.active>.page-link, .page-link.active {
  background-color: var(--secondary-color);
  border-color: var(--secondary-color);
}


/*---------------------------------------
  TIMELINE              
-----------------------------------------*/
.timeline-section {
  background-image: url("../images/colleagues-working-cozy-office-medium-shot-ca9f7bd450da40655782ab9da453d487.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
}

.timeline-container .vertical-scrollable-timeline {
  list-style-type: none;
  position: relative;
  padding-left: 0;
}

.timeline-container .vertical-scrollable-timeline .list-progress {
  width: 8px;
  height: 87%;
  background-color: var(--primary-color);
  position: absolute;
  left: 52px;
  top: 0;
  overflow: hidden;
}

.timeline-container .vertical-scrollable-timeline .list-progress .inner {
  position: absolute;
  right: 0;
  bottom: 0;
  height: 100%;
  background-color: var(--secondary-color);
  width: 100%;
}

.timeline-container .vertical-scrollable-timeline li {
  position: relative;
  padding: 20px 0px 65px 145px;
}

.timeline-container .vertical-scrollable-timeline li:last-child {
  padding-bottom: 0;
}

.timeline-container .vertical-scrollable-timeline li p {
  line-height: 40px;
}

.timeline-container .vertical-scrollable-timeline li p:last-child {
  margin-bottom: 0;
}

.timeline-container .vertical-scrollable-timeline li .icon-holder {
  position: absolute;
  left: 0;
  top: 0;
  width: 104px;
  height: 104px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: var(--secondary-color);
  border-radius: 50%;
  z-index: 1;
  transition: 0.4s all;
}

.timeline-container .vertical-scrollable-timeline li .icon-holder::before {
  content: "";
  width: 80px;
  height: 80px;
  border: 4px solid #fff;
  position: absolute;
  background-color: var(--secondary-color);
  border-radius: 50%;
  z-index: -1;
  transition: 0.4s all;
}

.timeline-container .vertical-scrollable-timeline li .icon-holder i {
  font-size: 25px;
  color: var(--white-color);
}

.timeline-container .vertical-scrollable-timeline li::before {
  content: "";
  position: absolute;
  height: 100%;
  width: 8px;
  background-color: transparent;
  left: 52px;
  z-index: 0;
}

.timeline-container .vertical-scrollable-timeline li.active .icon-holder {
  background-color: var(--primary-color);
}

.timeline-container .vertical-scrollable-timeline li.active .icon-holder::before {
  background-color: var(--primary-color);
}


/*---------------------------------------
  FAQs              
-----------------------------------------*/
.faq-section .accordion-item {
  border: 0;
}

.faq-section .accordion-button {
  font-size: var(--h6-font-size);
  font-weight: var(--font-weight-semibold);
}

.faq-section .accordion-item:first-of-type .accordion-button {
  border-radius: var(--border-radius-large);
}

.faq-section .accordion-button:not(.collapsed) {
  border-radius: var(--border-radius-large);
  box-shadow: none;
  color: var(--primary-color);
}

.faq-section .accordion-body {
  color: var(--p-color);
  font-size: var(--btn-font-size);
  line-height: 40px;
}

/*---------------------------------------
  NEWSLETTER               
-----------------------------------------*/
.newsletter-image {
  border-radius: var(--border-radius-medium);
}


/*---------------------------------------
  CONTACT               
-----------------------------------------*/
.google-map {
  border-radius: var(--border-radius-medium);
}

.contact-form .form-floating>textarea {
  border-radius: var(--border-radius-medium);
  height: 150px;
}


/*---------------------------------------
  SUBSCRIBE FORM               
-----------------------------------------*/
.subscribe-form-wrap {
  padding: 50px;
}

.subscribe-form {
  width: 95%;
}


/*---------------------------------------
  CUSTOM FORM               
-----------------------------------------*/
.custom-form .form-control {
  border-radius: var(--border-radius-large);
  color: var(--p-color);
  margin-bottom: 24px;
  padding-top: 13px;
  padding-bottom: 13px;
  padding-left: 20px;
  outline: none;
}

.form-floating>label {
  padding-left: 20px;
}

.custom-form button[type="submit"] {
  background: var(--custom-btn-bg-color);
  border: none;
  border-radius: var(--border-radius-large);
  color: var(--white-color);
  font-family: var(--title-font-family);
  font-size: var(--p-font-size);
  font-weight: var(--font-weight-semibold);
  transition: all 0.3s;
  margin-bottom: 0;
}

.custom-form button[type="submit"]:hover,
.custom-form button[type="submit"]:focus {
  background: var(--custom-btn-bg-hover-color);
  border-color: transparent;
}


/*---------------------------------------
  SITE FOOTER              
-----------------------------------------*/
.site-footer {
  border-bottom: 10px solid var(--secondary-color);
  position: relative;
}

.site-footer::after {
  content: "";
  position: absolute;
  bottom: 0;
  right: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 0 200px 200px;
  border-color: transparent transparent var(--secondary-color) transparent;
  pointer-events: none;
}

.site-footer-title {
  color: var(--primary-color); 
}

.site-footer .dropdown-menu {
  padding: 0;
}

.site-footer .dropdown-item {
  color: var(--p-color);
  font-size: var(--menu-font-size);
  font-weight: var(--font-weight-medium);
  padding: 4px 18px;
}

.site-footer .dropdown-item:hover {
  background-color: transparent;
  color: var(--primary-color);
}

.site-footer .dropdown-menu li:first-child .dropdown-item {
  padding-top: 10px;
}

.site-footer .dropdown-menu li:last-child .dropdown-item {
  padding-bottom: 12px;
}

.site-footer .dropdown-toggle {
  background-color: var(--secondary-color);
  border-color: var(--white-color);
}

.site-footer .dropdown-toggle:hover {
  background-color: var(--primary-color);
  border-color: transparent;
}

.site-footer-links {
  padding-left: 0;
}

.site-footer-link-item {
  display: block;
  list-style: none;
  line-height: normal;
}

.site-footer-link {
  color: var(--secondary-color);
  font-size: var(--copyright-font-size);
  font-weight: var(--font-weight-medium);
  line-height: normal;
}

.copyright-text {
  font-size: var(--copyright-font-size);
}


/*---------------------------------------
  SOCIAL ICON               
-----------------------------------------*/
.social-icon {
  margin: 0;
  padding: 0;
}

.social-icon-item {
  list-style: none;
  display: inline-block;
  vertical-align: top;
}

.social-icon-link {
  background: var(--secondary-color);
  border-radius: var(--border-radius-large);
  color: var(--white-color);
  font-size: var(--copyright-font-size);
  display: block;
  margin-right: 10px;
  text-align: center;
  width: 35px;
  height: 35px;
  line-height: 36px;
  transition: background 0.2s, color 0.2s;
}

.social-icon-link:hover {
  background: var(--primary-color);
  color: var(--white-color);
}


/*---------------------------------------
  RESPONSIVE STYLES               
-----------------------------------------*/
@media screen and (max-width: 991px) {
  h1 {
    font-size: 48px;
  }

  h2 {
    font-size: 36px;
  }

  h3 {
    font-size: 32px;
  }

  h4 {
    font-size: 28px;
  }

  h5 {
    font-size: 20px;
  }

  h6 {
    font-size: 18px;
  }

  .section-padding {
    padding-top: 50px;
    padding-bottom: 50px;
  }
  
  .navbar {
    background-color: var(--secondary-color);
  }

  .navbar-nav .dropdown-menu {
    position: relative;
    left: 10px;
    opacity: 1;
    pointer-events: auto;
    max-width: 155px;
    margin-top: 10px;
    margin-bottom: 15px;
  }

  .navbar-expand-lg .navbar-nav {
    padding-bottom: 20px;
  }

  .navbar-expand-lg .navbar-nav .nav-link {
    padding: 0;
  }

  .nav-tabs .nav-link:first-child {
    margin-right: 5px;
  }

  .nav-tabs .nav-link {
    font-size: var(--copyright-font-size);
    padding: 10px;
  }

  .featured-section {
    border-radius: 0 0 80px 80px;
    padding-bottom: 50px;
  }

  .custom-block-topics-listing .custom-block-image {
    width: auto;
  }

  .custom-block-topics-listing > .d-flex,
  .custom-block-topics-listing-info,
  .custom-block-topics-listing a {
    flex-direction: column;
  }

  .timeline-container .vertical-scrollable-timeline .list-progress {
    height: 75%;
  }

  .timeline-container .vertical-scrollable-timeline li {
    padding-left: 135px;
  }

  .subscribe-form-wrap {
    padding-top: 30px;
    padding-bottom: 0;
  }
}

@media screen and (max-width: 480px) {
  h1 {
    font-size: 36px;
  }

  h2 {
    font-size: 28px;
  }

  h3 {
    font-size: 26px;
  }

  h4 {
    font-size: 22px;
  }

  h5 {
    font-size: 20px;
  }
}


/****side bar ****/
body {
  margin: 0;
  padding: 0;
  transition: margin-right 0.3s ease-in-out;
}

.sidebar {
  width: 250px;
  height: 100vh;
  background: #f8f9fa;
  padding: 20px;
  position: fixed;
  top: 0;
  right: -250px; /* Caché par défaut */
  box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
  transition: right 0.3s ease-in-out;
}

.sidebar.open {
  right: 0;
}

.nav-link {
  color: #333;
  padding: 10px;
  display: block;
}

.nav-link:hover, .nav-link.active {
  background: #007bff;
  color: white;
  border-radius: 5px;
}

.toggle-btn {
  position: fixed;
  top: 20px;
  right: 20px;
  background: #13547a;
  color: white;
  border: none;
  padding: 10px 15px;
  cursor: pointer;
  border-radius: 5px;
  z-index: 1000;
}

.close-btn {
  position: absolute;
  top: 10px;
  left: 10px;
  background: none;
  border: none;
  font-size: 24px;
  cursor: pointer;
}

#main-content {
  transition: margin-right 0.3s ease-in-out;
  padding: 20px;
}

.sidebar.open ~ #main-content {
  margin-right: 250px;
}








/* Animation fluide du slider */
.header-carousel .header-carousel-item {
  transition: transform 1s ease-in-out;
}

/* Ajustement des images */
.header-carousel-item img {
  object-fit: cover;
  width: 100%;
  height: 80vh; /* Ajuste selon le design */
}

/* Personnalisation des boutons de navigation */
.owl-prev, .owl-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.5);
  color: white;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.owl-prev { left: 10px; }
.owl-next { right: 10px; }

.owl-prev:hover, .owl-next:hover {
  background: #007bff;
}


";s:6:"digest";s:32:"36f1459f35725f14f2b2d61605752991";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:122:"C:\Users\riadh.chawachi\Desktop\TuniVibe-abir - Copie\assets\content\images\colleagues-working-cozy-office-medium-shot.jpg";s:10:"publicPath";s:102:"/assets/content/images/colleagues-working-cozy-office-medium-shot-ca9f7bd450da40655782ab9da453d487.jpg";s:23:"publicPathWithoutDigest";s:69:"/assets/content/images/colleagues-working-cozy-office-medium-shot.jpg";s:15:"publicExtension";s:3:"jpg";s:7:"content";N;s:6:"digest";s:32:"ca9f7bd450da40655782ab9da453d487";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"content/images/colleagues-working-cozy-office-medium-shot.jpg";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:40:"content/css/templatemo-topic-listing.css";}