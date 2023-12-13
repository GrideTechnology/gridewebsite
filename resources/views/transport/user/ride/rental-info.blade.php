@extends('common.user.layout.rental-base')
{{ App::setLocale(  isset($_COOKIE['user_language']) ? $_COOKIE['user_language'] : 'en'  ) }}
@section('styles')
@parent
<style>
    body{
        margin:8px!important;
    }

    button:disabled {
        pointer-events: auto! important;
        cursor: not-allowed! important;
    }

    .label-danger{
        display:none;
        color: #fff;
        padding: 5px 10px;
        background: red;
        font-weight: 400;
        margin-top: 20px;
    }
       
h1{
        font-size: 1.5rem !important;
       }
        .jss129 {
    display: flex;
}
.jss130 {
    display: flex;
    padding: 0px 8px;
    align-items: center;
    justify-content: flex-end;
}
.jss131 {
    width: 100%;
    flex-grow: 1;
}
.jss137 {
    color: #fff;
}
.jss138 {
    margin: 0 40px 0 32px;
}
.jss139 {
    flex: 1;
    height: 62px;
}
.jss141 {
    z-index: 1201;
}
.jss145 {
    font-weight: 700;
}
.jss146 {
    left: 27px;
    bottom: 6px;
    position: relative;
    font-size: 9px;
}
.jss147 {
    flex-grow: 1;
}
.jss148 {
    width: 45px;
    cursor: pointer;
    height: 45px;
}
.jss151 {
    width: 240px;
    transition: width 225ms cubic-bezier(0.4, 0, 0.6, 1) 0ms;
}
.jss154 {
    display: flex;
    padding: 0px 8px;
    min-height: 56px;
    align-items: center;
    justify-content: flex-end;
}
.jss155 {
    background: #000000;
}
.jss156 {
    margin-right: 8px;
}
.jss157 {
    font-weight: 500;
}
.jss159 {
    padding: 48px 32px;
}
.jss162 {
    height: 100%;
}
.jss164 {
    display: flex;
    align-items: center;
}
.jss165 {
    border-bottom: 1px solid rgba(0, 0, 0, 0.12);
    margin-bottom: 24px;
    padding-bottom: 8px;
}
.jss166 {
    padding: 16px;
}
.jss167 {
    padding-bottom: 16px;
}
.jss168 {
    border-bottom: 1px solid rgba(0, 0, 0, 0.12);
    margin-bottom: 24px;
    padding-bottom: 8px;
}
.jss169 {
    border-bottom: 1px solid rgba(0, 0, 0, 0.12);
    margin-bottom: 24px;
    padding-bottom: 8px;
}
.jss170 {
    padding: 4px;
}
.jss171 {
    border-bottom: 1px solid rgba(0, 0, 0, 0.12);
    margin-bottom: 24px;
    padding-bottom: 8px;
}
.jss172 {
    height: 330px;
    display: flex;
    flex-direction: column;
}
.jss173 {
    padding-bottom: 0;
}
.jss174 {
    overflow: auto;
    padding-top: 16px;
}
.jss175 {
    padding-left: 20px;
    padding-right: 20px;
}
.jss176 {
    border-bottom: 1px solid rgba(0, 0, 0, 0.12);
    padding-bottom: 8px;
}
.jss183 {
    border-bottom: 1px solid rgba(0, 0, 0, 0.12);
    padding-bottom: 8px;
}
.jss184 {
    border-bottom: 1px solid rgba(0, 0, 0, 0.12);
    padding-bottom: 8px;
}
.jss185.jss186 {
    background-color: rgba(0, 0, 0, 0.08);
}
.jss190 {
    font-size: 11px;
    font-weight: 300;
    letter-spacing: 3px;
}
.jss193 {
    cursor: pointer;
    display: flex;
    flex-grow: 1;
    padding: 12px 20px;
}
.jss194 {
    color: rgb(0, 0, 0);
    font-size: 18px;
    font-weight: 400;
    margin-bottom: 2.4px;
}
.jss195 {
    color: rgb(245, 124, 0);
    font-size: 16px;
    font-weight: 400;
}
.jss196 {
    width: 45px;
    height: 45px;
    opacity: 1;
    margin-top: 5px;
    margin-right: 18px;
}

.MuiButtonBase-root .jss144 h1 {
    color: #fff;
}
.css-11ujx7e {
    margin: 0px;
    font-family: proxima-nova, sans-serif;
    /* font-weight: 400; */
    /* font-size: 1rem; */
    line-height: 1.5;
}
.css-1hy9t21 {
    width: 100%;
    height: 100%;
    text-align: center;
    object-fit: cover;
    color: transparent;
    text-indent: 10000px;
}
.css-1o5gwq2 {
    position: relative;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    flex-shrink: 0;
    width: 40px;
    height: 40px;
    font-family: proxima-nova, sans-serif;
    font-size: 1.25rem;
    line-height: 1;
    border-radius: 50%;
    overflow: hidden;
    user-select: none;
}
.css-15epwqu {
    margin: 0px;
    font-family: proxima-nova, sans-serif;
    font-weight: 500;
    font-size: 0.875rem;
    line-height: 1.57;
}
.css-fdrl1f {
    box-sizing: border-box;
    display: flex;
    flex-flow: column wrap;
    width: 100%;
    margin: 0px;
    /* flex-basis: 100%; */
    /* -webkit-box-flex: 0; */
    /* flex-grow: 0; */
    /* max-width: 100%; */
    -webkit-box-pack: center;
    justify-content: center;
}
.css-himpyl {
    box-sizing: border-box;
    display: flex;
    flex-flow: row wrap;
    width: 100%;
    margin: 0px;
    /* flex-basis: 100%; */
    /* -webkit-box-flex: 0; */
    /* flex-grow: 0; */
    /* max-width: 100%; */
    -webkit-box-align: center;
    align-items: center;
}
.css-116iflt {
    box-sizing: border-box;
    display: flex;
    flex-flow: row wrap;
    width: 100%;
    -webkit-box-align: stretch;
    align-items: stretch;
}
.css-1qw96cp {
    padding: 16px;
}
.css-1qw96cp:last-child {
    padding-bottom: 24px;
}
.css-n1mihu {
    background-color: rgb(255, 255, 255);
    color: rgb(96, 103, 112);
    transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    border-radius: 4px;
    border: 1px solid rgba(0, 0, 0, 0.12);
    overflow: hidden;
}
.css-39bbo6 {
    margin: 0px;
    flex-shrink: 0;
    border-width: 0px 0px thin;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0.12);
}
.css-1f8bwsm {
    min-width: 56px;
    color: rgba(0, 0, 0, 0.54);
    flex-shrink: 0;
    display: inline-flex;
}
.css-1tsvksn {
    flex: 1 1 auto;
    min-width: 0px;
    margin-top: 4px;
    margin-bottom: 4px;
}
.css-s21y5o {
    -webkit-tap-highlight-color: transparent;
    background-color: transparent;
    outline: 0px;
    border: 0px;
    margin: 0px;
    border-radius: 0px;
    cursor: pointer;
    user-select: none;
    vertical-align: middle;
    appearance: none;
    color: inherit;
    display: flex;
    -webkit-box-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    align-items: center;
    position: relative;
    text-decoration: none!important;
    width: 100%;
    box-sizing: border-box;
    text-align: left;
    padding: 8px 16px;
    transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
}
.css-y0tcuc {
    margin: 0px;
    font-family: proxima-nova, sans-serif;
    font-weight: 400;
    font-size: 1rem;
    line-height: 1.5;
    display: block;
}
.css-8rnkcc {
    box-sizing: border-box;
    display: flex;
    flex-flow: row wrap;
    width: 100%;
    -webkit-box-pack: justify;
    justify-content: space-between;
}
.css-1wxaqej {
    box-sizing: border-box;
    margin: 0px;
    flex-direction: row;
}
.css-1u3xkte {
    margin: 0px;
    font-family: proxima-nova, sans-serif;
    font-weight: 500;
    font-size: 1.25rem;
    line-height: 1.6;
    color: rgba(0, 0, 0, 0.6);
}
.css-1d3bbye {
    box-sizing: border-box;
    display: flex;
    flex-flow: row wrap;
    width: 100%;
}
.css-1jjjmie {
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    position: relative;
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent;
    background-color: transparent;
    outline: 0px;
    border: 0px;
    margin: 0px;
    cursor: pointer;
    user-select: none;
    vertical-align: middle;
    appearance: none;
    text-decoration: none;
    font-family: proxima-nova, sans-serif;
    font-weight: 500;
    font-size: 0.875rem;
    line-height: 1.75;
    text-transform: uppercase;
    min-width: 64px;
    padding: 6px 8px;
    border-radius: 4px;
    transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    color: #F26821;
}
.css-18espmw {
    margin: 0px;
    font-family: proxima-nova, sans-serif;
    font-weight: 400;
    font-size: 2.125rem;
    line-height: 1.235;
}
.css-8fpmj4 {
    transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    box-shadow: rgb(0 0 0 / 20%) 0px 2px 4px -1px, rgb(0 0 0 / 14%) 0px 4px 5px 0px, rgb(0 0 0 / 12%) 0px 1px 10px 0px;
    display: flex;
    flex-direction: column;
    width: 100%;
    box-sizing: border-box;
    flex-shrink: 0;
    position: fixed;
    z-index: 1100;
    top: 0px;
    left: auto;
    right: 0px;
    background-color: #F26821;
    color: rgb(255, 255, 255);
}
.css-99qjcr {
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    position: relative;
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent;
    background-color: transparent;
    outline: 0px;
    border: 0px;
    margin: 0px;
    cursor: pointer;
    user-select: none;
    vertical-align: middle;
    appearance: none;
    text-decoration: none;
    text-align: center;
    flex: 0 0 auto;
    border-radius: 50%;
    overflow: visible;
    transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    color: #F26821;
    padding: 5px;
    font-size: 1.125rem;
}
.css-87tp1z {
    position: relative;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    flex-shrink: 0;
    width: 40px;
    height: 40px;
    font-family: proxima-nova, sans-serif;
    font-size: 1.25rem;
    line-height: 1;
    border-radius: 50%;
    overflow: hidden;
    user-select: none;
    color: rgb(250, 250, 250);
    background-color: rgb(189, 189, 189);
}
.css-1b47e06 {
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    position: relative;
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent;
    background-color: transparent;
    outline: 0px;
    border: 0px;
    margin: 0px;
    border-radius: 0px;
    padding: 0px;
    cursor: pointer;
    user-select: none;
    vertical-align: middle;
    appearance: none;
    text-decoration: none;
    color: inherit;
}
.css-1w8s6so {
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    position: relative;
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent;
    background-color: transparent;
    outline: 0px;
    border: 0px;
    margin: 0px;
    cursor: pointer;
    user-select: none;
    vertical-align: middle;
    appearance: none;
    text-decoration: none;
    text-align: center;
    flex: 0 0 auto;
    border-radius: 50%;
    overflow: visible;
    color: rgba(0, 0, 0, 0.54);
    transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    padding: 12px;
    font-size: 1.75rem;
}
.css-170ukis {
    box-sizing: border-box;
    margin: 0px;
    flex-direction: row;
    /* flex-basis: 100%; */
    /* -webkit-box-flex: 0; */
    /* flex-grow: 0; */
    /* max-width: 100%; */
}
.css-1rzb3uu {
    position: relative;
    display: inline-flex;
    vertical-align: middle;
    flex-shrink: 0;
}
.css-1h77wgb {
    box-sizing: border-box;
    display: flex;
    flex-flow: row wrap;
    margin-top: -24px;
    width: calc(100% + 24px);
    margin-left: -24px;
}
.css-1h77wgb > .MuiGrid-item {
    padding-left: 24px;
    padding-top: 24px;
}
.css-11ujx7e {
    margin: 0px;
    font-family: proxima-nova, sans-serif !important;
    font-weight: 400 !important;
    font-size: 1rem !important;
    line-height: 1.5 !important;
}
.css-1tu59u4 {
    flex: 0 0 auto;
}
.css-3kdmgz {
    margin: 0px;
    font-family: proxima-nova, sans-serif !important;
    font-weight: 400;
    font-size: 1.5rem !important;
    line-height: 1.334;
}
.css-cuujzo {
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    position: relative;
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent;
    outline: 0px;
    border: 0px;
    margin: 0px;
    cursor: pointer;
    user-select: none;
    vertical-align: middle;
    appearance: none;
    text-decoration: none!important;
    font-family: proxima-nova, sans-serif;
    font-weight: 500;
    font-size: 0.875rem !important;
    line-height: 1.75;
    text-transform: uppercase;
    min-height: auto;
    transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    border-radius: 24px;
    padding: 0px 16px;
    min-width: 48px;
    width: auto;
    height: 48px;
    box-shadow: rgb(0 0 0 / 20%) 0px 3px 5px -1px, rgb(0 0 0 / 14%) 0px 6px 10px 0px, rgb(0 0 0 / 12%) 0px 1px 18px 0px;
    color: rgb(255, 255, 255);
    
}
.css-cuujzo:hover{
    color:#fff;
}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.css-lwofh0 {
    display: flex;
    flex-flow: row wrap;
    -webkit-box-pack: center;
    place-content: center;
    -webkit-box-align: center;
    align-items: center;
    position: absolute;
    box-sizing: border-box;
    font-family: proxima-nova, sans-serif;
    font-weight: 500;
    font-size: 0.75rem;
    min-width: 20px;
    line-height: 1;
    padding: 0px 6px;
    height: 20px;
    border-radius: 10px;
    z-index: 1;
    transition: transform 225ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    background-color: rgb(211, 47, 47);
    color: rgb(255, 255, 255);
    top: 0px;
    right: 0px;
    transform: scale(1) translate(50%, -50%);
    transform-origin: 100% 0%;
}
.css-v3z1wi {
    box-sizing: border-box;
    display: flex;
    flex-flow: row wrap;
    width: 100%;
    -webkit-box-align: center;
    align-items: center;
}
.css-w0pj6f {
    overflow: hidden;
    pointer-events: none;
    position: absolute;
    z-index: 0;
    inset: 0px;
    border-radius: inherit;
}
.css-vubbuv {
    user-select: none;
    width: 1em;
    height: 1em;
    display: inline-block;
    fill: currentcolor;
    flex-shrink: 0;
    transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    font-size: 1.5rem;
}
.css-1ontqvh {
    list-style: none;
    margin: 0px;
    padding: 8px 0px;
    position: relative;
}
.css-191lty2 {
    position: relative;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    padding-left: 16px;
    padding-right: 16px;
    min-height: 56px;
}
.css-rdx7ew {
    background-color: rgb(255, 255, 255);
    color: rgb(96, 103, 112);
    transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    box-shadow: none;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    height: 100%;
    flex: 1 0 auto;
   
    border-right: 1px solid rgba(0, 0, 0, 0.12);
}
.css-x15wq9 {
    position: fixed;
    inset: 0px 0px 0px auto;
    z-index: 1199;
}
.css-x3h831 {
    width: 100%;
    margin-left: auto;
    box-sizing: border-box;
    margin-right: auto;
    display: block;
   
}
.css-1igq5s6 {
    box-sizing: border-box;
    display: flex;
    flex-flow: row wrap;
    width: 100%;
    margin: 0px;
    flex-basis: 50%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 50%;
    -webkit-box-pack: center;
    justify-content: center;
}
.css-1w8ulrm {
    margin: 0px;
    font-family: proxima-nova, sans-serif;
    font-weight: 400;
    font-size: 1rem;
    line-height: 1.5;
    text-align: center;
    color: rgba(0, 0, 0, 0.6);
}
.css-efwuvd {
    box-sizing: border-box;
    margin: 0px;
    flex-direction: row;
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
.css-9zuxvs {
    box-sizing: border-box;
    display: flex;
    flex-flow: row wrap;
    width: 100%;
    margin: 0px;
   
    -webkit-box-pack: center;
    justify-content: center;
}
.css-19egsyp {
    box-sizing: border-box;
    margin: 0px;
    flex-direction: row;
   
}
.css-1s50f5r {
    box-sizing: border-box;
    margin: 0px;
    flex-direction: row;
 
}
.css-13xs5pw {
    box-sizing: border-box;
    margin: 0px;
    flex-direction: row;
}
.css-309trg {
    box-sizing: border-box;
    display: flex;
    flex-flow: row wrap;
    width: 100%;
    margin: 0px;
  
}
.css-1djztpa {
    box-sizing: border-box;
    margin: 0px;
    flex-direction: row;
}

.chartjs-size-monitor, .chartjs-size-monitor-expand, .chartjs-size-monitor-shrink {
    position: absolute;
    direction: ltr;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    pointer-events: none;
    visibility: hidden;
    z-index: -1;
}
.chartjs-size-monitor-expand > div {
    position: absolute;
    width: 1000000px;
    height: 1000000px;
    left: 0;
    top: 0;
}
.chartjs-size-monitor-shrink > div {
    position: absolute;
    width: 200%;
    height: 200%;
    left: 0;
    top: 0;
}
.chartjs-render-monitor {
    animation: chartjs-render-animation 0.001s;
}
.car-grid{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr ;
    width: 100%;
}
.car-grid div{
    border: 1px solid rgba(77, 75, 75, 0.75);
    margin: 30px 40px;
}

.car-grid img{
    width: 400px !important;
    display: block;
    margin: auto;
}

.car-grid p{
    text-align: center;
}
.car-grid h4{
    text-align: center;
}
.topnav2 {
    
  overflow: hidden;
  background-color: #000000;
}

.topnav2 a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav2 .main-help{
    color: #F26821 !important;
}
.topnav2 .main-help:hover{
    background-color: #000000 !important;
}
.topnav2 a:hover {
  background-color: #f9b694;
  color: black;
}

.topnav2 a.active {
  background-color: #F26821;
  color: white;
}
.car-listing{
    color: #F26821;
    font-size: 20px;
    margin-top: 40px !important;
    text-decoration: underline;
}
.car-listing:hover{
    color: #f26721b8;
    
}
.options{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    margin-bottom: 10px;
    
}
.form-control {
    border-radius: 4px;
    padding: 10px 30px !important;
    margin: 0px 0px;
    color: #000;
    border-color: rgba(151, 151, 151, 0.25);
    min-width: 100px;
    min-height: 41px;
}
.panel {
    margin-bottom: 20px;
     background-color: transparent; 
    border: 0px solid transparent; 
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
}

#myCarousel{
    
    width: 350px;
    justify-content: center;
    align-items: center;
    
}
.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
    justify-content: center;
    align-items: center;
}
.carousel-inner .item img{
    object-fit: cover;
    height:200px;
}
.car-section{
display: grid;
grid-template-columns: 1fr 1fr;
gap:30px;
justify-content: space-evenly;
justify-items: center;
align-content: space-evenly;
margin: auto;
width: 75%;

}
.car-form{
    width: 400px;
}

.info-section p{
    color: #3c3b3b !important;
    width: 100%;
    font-weight: 400;
    
}
.info-section h1{
    padding-bottom: 20px;
    font-weight: 400;
    
}
.people div {
  padding-bottom: 25px;
  display: flex;
  align-items: center;
}
 .people div img {
  width: 65px;
  height: 65px;
  object-fit: cover;
  margin-right: 15px;
}
 .people div p {
  margin: 0;
  font-size: 13px;
  line-height: 25px;
}
 .people div p span {
  display: block;
  font-size: 16px;
  font-weight: 600;
  color: black;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}
.btn-primary {
    background-color: #f26822 !important;
    border-color: #f26822 !important;
}
.btn {
    color: #fff !important;
    letter-spacing: 0.025em !important;
    font-size: 14px !important;
    display: inline-block !important;
    border: 0 !important;
    border-radius: 4px !important;
    text-transform: capitalize !important;
    text-decoration: none !important;
    -webkit-transition: all .3s ease-out!important;
    transition: all .3s ease-out!important;
    padding: 10px 20px !important;
    height: inherit !important;
    /* min-width: 185px; */
}
.car-price{
    color: #3c3b3b !important;
    text-align: center;
    font-size: 30px;
    font-weight: 700;
}
.car-price span{
    color: #575962;
}
.recommend-grid{
    display: grid;
    grid-template-columns: 1fr  1fr;
    gap: 15px;

}
.recommend-grid .recommend-car{
    border-radius: 2px;
    border: 1px solid gray;
    width: 100% !important;
    justify-content: space-evenly;
  justify-items: center;
  align-content: space-evenly;
  align-items: center;
  text-align: center;
    
}
.recommend-grid .recommend-car img{
    height:200px;
    width: 300px;
    object-fit: cover;
}
.recommend-car div{
    background-color: #c2c3c6;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
.mySlides img{
    height:250px;
    object-fit: cover;
}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

@media (min-width: 0px) and (orientation: landscape)
{
    .jss130 {
    min-height: 48px;
}
 .jss154 {
    min-height: 48px;
}
.css-191lty2 {
    min-height: 48px;
}}


@media (min-width: 600px)
{
    .css-170ukis {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
    .css-fdrl1f {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
    .css-himpyl {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
    .css-309trg {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
    .css-1s50f5r {
    flex-basis: 50%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 50%;
}
    .css-19egsyp {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
    .css-9zuxvs {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
    .css-1igq5s6 {
    flex-basis: 50%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 50%;
}
 .jss130 {
    min-height: 64px;
}
 .jss154 {
    min-height: 64px;
}
.css-191lty2 {
    min-height: 64px;
    padding-left: 24px;
    padding-right: 24px;
}
.css-x3h831 {
    max-width: 600px;
    padding-left: 24px;
    padding-right: 24px;
}
.css-efwuvd {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
}

@media (min-width: 900px)
{
    .css-170ukis {
    flex-basis: 50%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 50%;
}
    .css-fdrl1f {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
    .css-himpyl {
    flex-basis: 50%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 50%;
}
    .css-1djztpa {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
    .css-309trg {
    flex-basis: 50%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 50%;
}
    .css-13xs5pw {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
    .css-1s50f5r {
    flex-basis: 50%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 50%;
}
    .css-19egsyp {
    flex-basis: 33.3333%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 33.3333%;
}
    .css-9zuxvs {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
    .css-1igq5s6 {
    flex-basis: 25%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 25%;
}
    .css-efwuvd {
    flex-basis: 66.6667%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 66.6667%;
}
.css-x3h831 {
    max-width: 900px;
}}

@media (min-width: 1200px)
{
    .css-170ukis {
    flex-basis: 33.3333%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 33.3333%;
}
    .css-fdrl1f {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
    .css-himpyl {
    flex-basis: 50%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 50%;
}
    .css-1djztpa {
    flex-basis: 58.3333%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 58.3333%;
}
    .css-309trg {
    flex-basis: 50%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 50%;
}
    .css-13xs5pw {
    flex-basis: 41.6667%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 41.6667%;
}
    .css-1s50f5r {
    flex-basis: 50%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 50%;
}
    .css-19egsyp {
    flex-basis: 33.3333%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 33.3333%;
}
    .css-9zuxvs {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
    .css-1igq5s6 {
    flex-basis: 25%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 25%;
}
    .css-efwuvd {
    flex-basis: 66.6667%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 66.6667%;
}
.css-x3h831 {
    max-width: 1200px;
}}

@media (min-width: 1536px)
{
    .css-170ukis {
    flex-basis: 33.3333%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 33.3333%;
}
    .css-fdrl1f {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
    .css-himpyl {
    flex-basis: 50%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 50%;
}
    .css-1djztpa {
    flex-basis: 58.3333%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 58.3333%;
}
    .css-309trg {
    flex-basis: 50%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 50%;
}
    .css-13xs5pw {
    flex-basis: 41.6667%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 41.6667%;
}
    .css-1s50f5r {
    flex-basis: 50%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 50%;
}
    .css-19egsyp {
    flex-basis: 33.3333%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 33.3333%;
}
    .css-9zuxvs {
    flex-basis: 100%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 100%;
}
    .css-1igq5s6 {
    flex-basis: 25%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 25%;
}
    .css-efwuvd {
    flex-basis: 66.6667%;
    -webkit-box-flex: 0;
    flex-grow: 0;
    max-width: 66.6667%;
}
.css-x3h831 {
    max-width: 1536px;
}}

.datepicker table tr td.disabled, .datepicker table tr td.disabled:hover{
    background: #ececec!important;
    color: #707070!important;
}
.datepicker thead tr:first-child th, .datepicker tfoot tr th {
    background: #888!important;
    color: #fff!important;
}
.chat-btn{
    background: #007bff;
    color: #fff!important;
    padding: 10px 15px;
    border-radius: 4px;
    text-align: center;
    text-decoration: none!important;
    width: 29%;
}
    </style>


@stop
@section('content')
                                                        
                                                        <div class="jss131"><div class="jss130"></div>
                                                        
                                                        <div class="MuiContainer-root MuiContainer-maxWidthLg MuiContainer-fixed jss159 css-x3h831">
                                                            <section class="car-section">

                                                                <section class="car-form">
                                                                
                                                                    <div class="car-info-sec">
                                                                
                                                                        
                                                                    <div class="container">
                                                                        <div class="slideshow-container">

                                                                            
                                                                            
                                                                        </div>
                                                                            <br>
                                                                            
                                                                            <div class="slider-dots" style="text-align:center">
                                                                            </div>
                                                                            
                                                                      </div>
                                                                
                                                                      
                                                                
                                                                
                                                                    <div class="sc-gzOgki bhoIOA" style="padding: 1.5em;">
                                                                        <p class="car-price"></p>
                                                                        <form action="{{url('/')}}/user/rental/car/{{$id}}/book">
                                                                            <div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label">
                                                                                        When would you like to start?
                                                                                        <span class="sc-hMqMXs bwEkLH"> *</span>
                                                                                    </label>
                                                                                    <div class="sc-Rmtcm gxnsEf">
                                                                                        <div class="DayPickerInput">
                                                                                            <span class="input-group">
                                                                                                <input placeholder="mm/dd/yyyy" class="form-control" value="" id="fromdate" name="fromdate" type="text" required>
                                                                                               
                                                                                            </span>
                                                                                        </div></div>
                                                                                        <div class="sc-jzJRlG eoUYaU">
                                                                
                                                                                        </div><div class="sc-jzJRlG eoUYaU">
                                                                
                                                                                        </div><div class="sc-jzJRlG eoUYaU"></div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">How many days will you be driving?
                                                                                            <span class="sc-hMqMXs bwEkLH"> *</span>
                                                                                        </label>
                                                                                        <div class="sc-jzJRlG eoUYaU" style="width: 100%;"><div class="sc-bwzfXH ihgQcP sc-htpNat eLQHN">
                                                                                            <div class="sc-bwzfXH fYmzPq">
                                                                                                <input name="rentalDays" id="rentalDays" type="number" class="sc-eqIVtm jaWZrR form-control" value="1" onkeyup="calculateTotal()" required>
                                                                                            </div>
                                                                                            <div class="sc-bwzfXH bzReoz"></div></div></div>
                                                                                            <div class="sc-jzJRlG eoUYaU"></div><div class="sc-jzJRlG eoUYaU"></div>
                                                                                            <div class="sc-jzJRlG eoUYaU"></div></div>
                                                                                            <table class="table table-striped table-condensed">
                                                                                                <thead><tr><th>Rental Price</th></tr></thead>
                                                                                                <tbody><tr><td class="sc-gxMtzJ dvJaGi">$<span class="amount"></span> x <span class="days">1</span> Days</td>
                                                                                                    <td class="sc-gxMtzJ hEvvBL">$<span class="amount_total"></span></td>
                                                                                                </tr>
                                                                                                <tr><td class="sc-gxMtzJ dvJaGi">Insurance Fee ($<span class="insurance_fee"></span> x <span class="days">1</span> Days)</td>
                                                                                                    <td class="sc-gxMtzJ hEvvBL">$<span class="insurance_fee_total"></span></td>
                                                                                                </tr>
                                                                                                <tr><td class="sc-gxMtzJ dvJaGi">Booking Fee ($<span class="trip_fee"></span> x <span class="days">1</span> Days)</td>
                                                                                                        <td class="sc-gxMtzJ hEvvBL">$<span class="trip_fee_total"></span></td></tr>
                                                                                                <tr>
                                                                                                    <td class="sc-gxMtzJ dvJaGi">Sales Tax (<span class="sales_tax"></span>%)</td>
                                                                                                    <td class="sc-gxMtzJ hEvvBL">$<span class="sales_tax_total"></span></td></tr>
                                                                                                    </tbody>
                                                                                                        <thead><tr><th style="font-size: 18px;">Total</th>
                                                                                                            <th style="font-size: 18px; text-align: right;">$<span class="total_amount">148.40</span></th></tr></thead></table>
                                                                                                            <div class="sc-ckVGcZ gjKadA"></div></div><button type="submit" id="book" class="btn btn-primary btn-block">Continue</button></form>


                                                                                                    <div class="form-group">
                                                                                                        <label class="label label-danger"></label>
                                                                                                    </div>
                                                                                                        </div>
                                                                </div>
                                                                                                                   
                                                                
                                                                
                                                                </section>
                                                            
                                                                <section class="info-section">
                                                                    <h1>Car Information</h1>
                                                                    <p class="car-about"></p>
                                                                    <p><b>Mileage Allowed:</b>
                                                                        <span class="mile_allowed">500</span> mi/day</p>
                                                                        <hr style="height:2px;border-width:0;color:gray;background-color:gray;width:100%">
                                                                        <h1>Owner</h1>
                                                                        <div class="people">
                                                                            <div>
                                                                              <img src="{{url('/')}}/assets/layout/images/people.png" class="driver_profile"/>
                                                                              <p>
                                                                                <span class="driver_name"></span>
                                                                                </p>
                                                                                <a href="javascript:void(0)" class="chat-btn" id="chatid" data-id="">Message the owner</a>
                                                                            </div>
                                                                            </div>
                                                                            <hr style="height:2px;border-width:0;color:gray;background-color:gray;width:100%">
                                                                            <h1>Recommended For You</h1>
                                                                            <div class="recommend-grid">
                                                                                
                                                                            </div>
                                                                </section>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            </section>
                                                    
                                                    
                                                    </div></div></div></div>
@stop
@section('scripts')
@parent
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/redmond/jquery-ui.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script>
var url = getBaseUrl() + "/user/transport/cars-details/"+"{{$id}}";

if(getToken('user')==null){
   window.location.href='https://gridetech.com/user/login';
}


$.ajax({
    type:"GET",
    url: getBaseUrl() + "/user/profile",
    headers: {
        Authorization: "Bearer " + getToken("user")
    },
    success:function(response){
     var data = parseData(response);
     var result = data.responseData;
     if(result.licence_verified==0 || result.licence_verified==''){
        $('#book').attr('disabled', 'true');
        $('.label-danger').html('Your profile is under review please complete your profile (license details are required to book a rental). <a href="{{url("/user/profile/general")}}">Click Here</a>');
        $('.label-danger').show();
     }
    }
});

$.ajax({
    type:"GET",
    url: url,
    headers: {
        Authorization: "Bearer " + getToken("user")
    },
    'beforeSend': function (request) {
        showInlineLoader();
    },
    success:function(data){
            var carData = data.responseData.carlist[0];
            var carImages = data.responseData.carimages;
            var admincharges = data.responseData.admincharges;

            imageSlider='';
            sliderDots='';

            $('#chatid').attr('data-id', carData.owner_id);
            $('.car-price').html(carData.year+' '+carData.model+' <br><span id="price">$'+carData.daily_charges+' / Day</span>');
            $('.car-about').html(carData.about);
            $('.amount').html(carData.daily_charges);
            $('.driver_name').html(carData.first_name+' '+carData.last_name);
            if(carData.driver_profile!=''){
                $('.driver_profile').attr('src', carData.picture);
            }else{
                $('.driver_profile').attr('src', '{{url("/")}}/assets/layout/images/people.png');
            }
            
            $('.insurance_fee').html(admincharges.insurance_fee);
            $('.sales_tax').html(admincharges.sales_tax);
            $('.trip_fee').html(admincharges.booking_fee);
            $('.mile_allowed').html(carData.milleage_allowed);
            if(carImages.length>0){
                Object.keys(carImages[0]).forEach(key => {
                    
                    if(carImages[0][key]!==null){
                        imageSlider+='<div class="mySlides fade"><img src="'+carImages[0][key]+'" style="width:100%"></div>';
                        sliderDots+='<span class="dot"></span> ';
                    }
                });
            }

            $('.slideshow-container').html(imageSlider);    
            $('.slider-dots').html(sliderDots);
            hideInlineLoader();

            let slideIndex = 0;
            showSlides();
            
            function showSlides() {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }

            calculateTotal();
        }
    });

var current_latitude = 34.1352786;
    var current_longitude = -94.6107576;

   

    if( navigator.geolocation ) {
       navigator.geolocation.getCurrentPosition( success, fail );
    } else {
        console.log('Sorry, your browser does not support geolocation services');
    }

    function success(position)
    {
        // document.getElementById('long').value = position.coords.longitude;
        // document.getElementById('lat').value = position.coords.latitude

        if(position.coords.longitude != "" && position.coords.latitude != ""){
            current_longitude = position.coords.longitude;
            current_latitude = position.coords.latitude;
            var url = getBaseUrl() + "/user/transport/recommended-cars";
            $.ajax({
                type:"POST",
                url: url,
                headers: {
                    Authorization: "Bearer " + getToken("admin")
                },
                data: {long: current_longitude, lat:current_latitude},
                'beforeSend': function (request) {
                    showInlineLoader();
                },
                success:function(data){
                    var recommendedCars = data.responseData;

                        recommendedList='';
                        recommendedCars.forEach(function(item, index){
                            recommendedList += '<div class="recommend-car"><a href="{{url("/")}}/user/rental/car/'+item.id+'/info"><div><p>'+item.year+' '+item.model+' </p><p>$'+item.daily_charges+' / Day</p></div><img src="'+item.right+'" ><p>'+item.distance+' from you</p></a></div>';
                        });

                        $('.recommend-grid').html(recommendedList);
                }
            });
        }

    }

    function fail()
    {
        // Could not obtain location
        console.log('unable to get your location');
         //initMap();
    }

function calculateTotal(){
    var days = $('#rentalDays').val();
    var amount = $('.amount').html();
    var insurance_fee = $('.insurance_fee').html();
    var sales_tax = $('.sales_tax').html();
    var trip_fee = $('.trip_fee').html();

    
    $('#days').val(days);
    $('.days').html(days);

    var amount_total = amount*days;
    var insurance_fee_total = insurance_fee*days;
    var trip_fee_total = trip_fee*days;  
    var tax = ((amount_total+insurance_fee_total+trip_fee_total)/100)*sales_tax;
    var sales_tax_total = Math.round(tax * 100) / 100;
    
    var total_amount = amount_total+insurance_fee_total+trip_fee_total+sales_tax_total;

    $('.amount_total').html(amount_total);
    $('.insurance_fee_total').html(insurance_fee_total);
    $('.sales_tax_total').html(sales_tax_total);
    $('.trip_fee_total').html(trip_fee_total);

    $('.total_amount').html(total_amount);
}


$('#book').click(function(){
    var days = $('#rentalDays').val();
    if(days==0 || days==''){
        $('#rentalDays').val(1);
    }
    
});



$.ajax({
    url: getBaseUrl() + "/user/transport/carbooking-status/{{$id}}",
    type: 'GET',
    headers: {
            Authorization: "Bearer " + getToken("user")
        },
    success: function(response){
       var response = response.responseData;
       var dateList = [];
       response.forEach(function(item, index){
            var start = new Date(item.booking_start_date);
            var end = new Date(item.booking_end_date);

            var date = getDatesInRange(start, end);

            dateList.push(date);
            
       });
       exclude = [];
       dateList.forEach(function(item, index){
            item.forEach(function(item1, index1){
                exclude.push(item1);
            });
       });
       $('#fromdate').datepicker({
            setStartDate: new Date(),
            beforeShowDay: function(date) {
                var day = jQuery.datepicker.formatDate('dd-mm-yy', date);
                var month = date.getMonth();
                var year = date.getFullYear();
                return [!~$.inArray(day, exclude)];
              },
        });
    }
});

function getDatesInRange(startDate, endDate) {
  const date = new Date(startDate.getTime());

  const dates = [];

  while (date <= endDate) {
    month =date.getMonth();
    month = month + 1;
    month = month.toString();
    if(month.length==1){
        month = '0'+month;
    }
    var day = date.getDate();
        day = day.toString();
    if(day.length==1){
        day = '0'+ day;
    }

    dates.push(day+'-'+month+'-'+date.getFullYear());
    date.setDate(date.getDate() + 1);
  }

  return dates;
}

$('#chatid').click(function(){
    var chatid = $('#chatid').attr('data-id');

    localStorage.setItem("chatid", chatid);

    window.location.href="{{url('/')}}/user/rental/messages";
})

        
</script>
@stop