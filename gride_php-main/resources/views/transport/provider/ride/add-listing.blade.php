@extends('common.user.layout.listing-base')
{{ App::setLocale(  isset($_COOKIE['user_language']) ? $_COOKIE['user_language'] : 'en'  ) }}
@section('styles')
@parent
<style>
    html, body{
        margin:8px!important;
        font-family: proxima-nova, sans-serif !important;
    }

h5{
    margin-top:1.67em!important;
    margin-bottom:1.67em!important;
    font-size: 0.83em;
    color: rgba(255, 255, 255, 0.649)!important;
}



h4{
  padding-bottom: 10px;
}
.m-0{
  color: #f26822 !important;
}
.location .main-text{
  background-color: transparent;
  border: 1px solid white;
  padding: 5px !important;
  margin-bottom: 10px;
}
.location input{
  color: white;
  width: 100%;
}
.form-group{
    width: 70% !important;
    margin-bottom: 10px;
}


button{
    cursor: pointer;
}
#prevBtn:hover, #nextBtn:hover{
     background: #d8d7d7;
}
.form-main{
    width: 100% ;
}
#regForm {
    margin: 19px auto; 
    padding: 40px;
    width: 900px;
    min-width: 300px;
    background: #000;
    border-radius: 28px;
}
input {
    padding: 15px 35px !important;
    border-radius: 4px !important;
}
.form-group input {
    width: 100%;
}
button#prevBtn {
    background: #fff;
    color: #000;
    border-radius: 14px;
    padding: 10px 20px;
}
button#nextBtn {
    background: #fff;
    color: #000;
    border-radius: 14px;
    padding: 10px 20px;
}
h3 {
    font-size: 23px!important;
    padding-left: 20px;
    padding-bottom: 3px;
    color: #fff!important;
    font-weight: bold!important;
    text-transform: uppercase;
    text-align: left;
    letter-spacing: 0px!important;
}

h4 {
    font-size: 20px!important;
    padding-left: 20px;
    padding-bottom: 3px;
    color: #ffffffb1;
    text-transform: uppercase;
    text-align: left;
    font-weight:bold!important;
    padding-left: 20px;
    color: #ffffffb1!important;
    text-align: left;
    margin-top: 1.63em!important;
    margin-bottom: 1.63em!important;
}

.step.active {
    opacity: 1;
}
.step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
}
.tab {
    display: none;
    float: none!important;
    border: none!important;
    background-color: #000!important;
    width: 100%!important;
    height: auto!important;
}

.rd {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    color: #fff;
    margin-top: 20px;
}

.rd input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

.rd input:checked ~ .checkmark {
    background-color: #f26822;
}

.rd input:checked ~ .checkmark:after {
    display: block;
}

.rd .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.checkmark {
    position: absolute;
    top: 5px;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}
input.invalid {
    background-color: #ffdddd;
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
    font-family: proxima-nova, sans-serif;
    font-weight: 400;
    font-size: 1rem;
    line-height: 1.5;
}
.css-1tu59u4 {
    flex: 0 0 auto;
}
.css-3kdmgz {
    margin: 0px;
    font-family: proxima-nova, sans-serif;
    font-weight: 400;
    font-size: 1.5rem;
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
    font-size: 0.875rem;
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
.image-tab{
    display: grid;
    grid-template-columns: 1fr 1fr;
}
.image-tab div{
    border: 1px solid gray;
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
    </style>

@stop
@section('content')
<div class="jss131"><div class="jss130"></div><div class="MuiContainer-root MuiContainer-maxWidthLg MuiContainer-fixed jss159 css-x3h831">


                                                            <div class="form-main">
                                                                <form id="regForm" method="post">
                                                                    @csrf
                                                                    <!-- <h1 class="inform">Your Information</h1> -->
                                                                    <!-- One "tab" for each step in the form: -->
                                                                    <div class="tab" style="display: block;">
                                                                        <h3>Getting Started</h3>
                                                                        <hr>
                                                                    <h4>What you need</h4>
                                                                    <h5>1. Basic car information (VIN, Make, Model, Year, Color)
                                                                        </h5>
                                                                        <h5>2. Images of the car</h5>
                                                                        <h5>3. Proof of Registration
                                                                            </h5>
                                                                            <h5>4. Proof of Insurance</h5>
                                                                            <h5>5. Proof of Inspection</h5>
                                                                    </div>
                                                                
                                                                
                                                                    <div class="tab">
                                                                        <h3>Where will drivers pickup the car?</h3>
                                                                        <hr>
                                                                        <h4>Pickup Address:</h4>
                                                                        <div class="form-group">
                                                                            <input type="text" placeholder="Enter pickup address" id="pickup_address" name="pickup_address">
                                                                          </div>
                                                                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13258.017322841208!2d-84.31091775316064!3d33.82510230135056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f507c1bd5f7e0d%3A0xfc83d1d581344c11!2sOak%20Grove%2C%20Sagamore%20Hills%2C%20GA%2030033!5e0!3m2!1sen!2sus!4v1678816173944!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                                    </div>
                                                                
                                                                    <div class="tab">
                                                                        <h3>Tell us about your car</h3>
                                                                        <hr>
                                                                        <h4>VIN:</h4>
                                                                        <div class="form-group">
                                                                            <input type="text" placeholder="Enter VIN number" id="vin" name="vin">
                                                                          </div>
                                                                          <h4>Make:</h4>
                                                                          <div class="form-group">
                                                                              <input type="text" placeholder="Vehicle make" id="make" name="make">
                                                                            </div>
                                                                            <h4>Model:</h4>
                                                                            <div class="form-group">
                                                                                <input type="text" placeholder="Vehicle model" id="model" name="model">
                                                                              </div>
                                                                              <h4>Year:</h4>
                                                                              <div class="form-group">
                                                                                  <input type="text" placeholder="Vehicle year" id="year" name="year">
                                                                                </div>
                                                                                <h4>Color:</h4>
                                                                              <div class="form-group">
                                                                                  <input type="text" placeholder="Vehicle color" id="color" name="color">
                                                                                </div>
                                                                                <h4>Odometer:</h4>
                                                                                <div class="form-group">
                                                                                    <input type="text" placeholder="Vehicle odometer" id="odometer" name="odometer">
                                                                                  </div>
                                                                                  <h4>Plate number:</h4>
                                                                                  <div class="form-group">
                                                                                      <input type="text" placeholder="Vehicle plate number" id="plate_number" name="plate_number">
                                                                                    </div>
                                                                    </div>
                                                                
                                                                
                                                                    <div class="tab">
                                                                      
                                                                   
                                                                    <h3>Gride Protection</h3>
                                                                    <hr>
                                                                    
                                                                    <div class="col-md-12">
                                                                        <label class="rd">Basic Protection <p>Insurance and Vehicle Coverage
                                                                <br>
                                                                            $1 Million Liability Coverage
                                                                            $3,000 deductible per incident
                                                                            Up to $50,000 Physical damage coverage
                                                                            Incident Coverage
                                                                            <br>
                                                                            Up to $30 cleaning reimbursement
                                                                            65% Gas reimbursement
                                                                            65% mileage overage reimbursement</p>
                                                                            <p>You earn 85%</p>
                                                                  <input type="radio" name="protection" value="basic">
                                                                  <span class="checkmark"></span>
                                                                </label>
                                                                
                                                                        </div>
                                                                
                                                                        <div class="col-md-12">
                                                                            <label class="rd">Standard Protection <p>
                                                                                Insurance and Vehicle Coverage
                                                                <br>
                                                                $1 Million Liability Coverage
                                                                $2,500 deductible per incident
                                                                Up to $50,000 Physical damage coverage
                                                                Incident Coverage
                                                                <br>
                                                                Up to $50 cleaning reimbursement
                                                                80% Gas reimbursement
                                                                80% mileage overage reimbursement
                                                                            </p>
                                                                            <p>You earn 80%</p>
                                                                      <input type="radio" name="protection" value="standard">
                                                                      <span class="checkmark"></span>
                                                                    </label>
                                                                    
                                                                            </div>
                                                                 
                                                                    
                                                                    </div>
                                                                
                                                                    <div class="tab">
                                                                    
                                                                        <h3>Pricing</h3>
                                                                        <hr>
                                                                        
                                                                       
                                                                
                                                                
                                                                            <h4>Daily allowed miles:</h4>
                                                                            <div class="form-group">
                                                                                <input type="text" placeholder="ex. 1000" id="milleage_allowed" name="milleage_allowed">
                                                                              </div>

                                                                              <h5>Estimated Earnings = $[]</h5>

                                                                     
                                                                        
                                                                        </div>
                                                                
                                                                        <div class="tab">
                                                                    
                                                                            <h3>Upload Images of your car</h3>
                                                                            <hr>
                                                                            <div class="image-tab">
                                                                                <div>
                                                                            <h4>Front:</h4>
                                                                            <input type="file" id="front" name="front" accept="image/*"></div>
                                                                            <div><h4>Back:</h4>
                                                                            <input type="file" id="back" name="back" accept="image/*"></div>
                                                                            <div><h4>Left side:</h4>
                                                                            <input type="file" id="left" name="left" accept="image/*"></div>
                                                                            <div><h4>Right side:</h4>
                                                                            <input type="file" id="right" name="right" accept="image/*"></div>
                                                                            <div><h4>Front left tire:</h4>
                                                                            <input type="file" id="front_left_tire" name="front_left_tire" accept="image/*"></div> 
                                                                            <div><h4>Front right tire:</h4>
                                                                            <input type="file" id="front_right_tire" name="front_right_tire" accept="image/*"></div>
                                                                            <div><h4>Back left tire:</h4>
                                                                            <input type="file" id="back_left_tire" name="back_left_tire" accept="image/*"></div>
                                                                            <div><h4>Back right tire:</h4>
                                                                            <input type="file" id="back_right_tire  " name="back_right_tire" accept="image/*"></div> 
                                                                            <div><h4>Left front seat interior including floor:</h4>
                                                                                <input type="file" id="left_front_seat_interior" name="left_front_seat_interior" accept="image/*"></div> 
                                                                                <div><h4>Right front seat interior including floor:</h4>
                                                                                    <input type="file" id="right_front_seat_interior" name="right_front_seat_interior" accept="image/*"></div> 
                                                                                    <div><h4>Left back seat interior including floor:</h4>
                                                                                        <input type="file" id="left_back_seat_interior" name="left_back_seat_interior" accept="image/*"></div> 
                                                                                        <div><h4>Right back seat interior including floor:</h4>
                                                                                            <input type="file" id="right_back_seat_interior" name="right_back_seat_interior" accept="image/*"></div> 
                                                                                            <div><h4>Left front door interior:</h4>
                                                                                                <input type="file" id="left_front_door" name="left_front_door" accept="image/*"></div> 
                                                                                                <div><h4>Right front door interior:</h4>
                                                                                                    <input type="file" id="right_front_door" name="right_front_door" accept="image/*"></div> 
                                                                                                    <div><h4>Left back door interior:</h4>
                                                                                                        <input type="file" id="left_back_door" name="left_back_door" accept="image/*"></div> 
                                                                                                        <div><h4>Right back door interior:</h4>
                                                                                                            <input type="file" id="right_back_door" name="right_back_door" accept="image/*"></div> 
                                                                                <div><h4>Back Interior:</h4>
                                                                                    <input type="file" id="back_interior" name="back_interior" accept="image/*"></div> 
                                                                                    <div><h4>Trunk:</h4>
                                                                                        <input type="file" id="trunk" name="trunk" accept="image/*"></div> 
                                                                                        <div><h4>Dashboard (milage, gas):</h4>
                                                                                            <input type="file" id="dashboard" name="dashboard" accept="image/*"></div> 
                                                                            </div>
                                                                            </div>
                                                                
                                                                            <div class="tab">
                                                                    
                                                                                <h3>Upload Documents</h3>
                                                                                <hr>
                                                                                <h4>Registration:</h4>
                                                                                <input type="file" id="registration" name="registration" accept="image/*">
                                                                                <h4>Insurance:</h4>
                                                                                <input type="file" id="insurance" name="insurance" accept="image/*">
                                                                                <h4>Inspection:</h4>
                                                                                <input type="file" id="inspection" name="inspection" accept="image/*">
                                                                               
                                                                             
                                                                                
                                                                                </div>
                                                                    
                                                                    <div style="overflow:auto;">
                                                                      <div style="float:right;">
                                                                        <button type="button" id="prevBtn" onclick="nextPrev(-1)" style="display: none;">Previous</button>
                                                                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                                                      </div>
                                                                    </div>
                                                                    <!-- Circles which indicates the steps of the form: -->
                                                                    <div style="text-align:center;margin-top:40px;">
                                                                      <span class="step active"></span>
                                                                      <span class="step"></span>
                                                                      <span class="step"></span>
                                                                      <span class="step"></span>
                                                                      <span class="step"></span>
                                                                      <span class="step"></span>
                                                                      <span class="step"></span>
                                                                    </div>
                                                                  </form>
                                                                </div>
                                                                




                                                
                                                </div></div></div></div>

@stop
@section('scripts')
@parent
 <script>
    
         
    function openNav() {
          document.getElementById("mySidenav").style.width = "100%";
      }
  
      function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
      }
  
      function openToggle() {
          document.getElementById("toggle-bg").style.width = "100%";
          document.getElementById("sideToggle").style.right = "-10px";
      }
  
      function closeToggle() {
          document.getElementById("toggle-bg").style.width = "0";
          document.getElementById("sideToggle").style.right = "-640px";
      }
</script>
<script>

        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        
        function showTab(n) {
        
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("tab");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
            $("#nextBtn").removeClass("submit-form");
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
            $("#nextBtn").addClass("submit-form");
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }
        
        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("tab");
        
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;

          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
              var radioValue = $("input[name='service_radio']:checked").val();
           if(currentTab==2 && radioValue=="Others"){
            window.location.href = "https://gridetech.com/pages/coming_soon";
           }
        
           if($("#terms").prop('checked') == false && currentTab==3){
            $( "#nextBtn" ).prop( "disabled", true );
           }
        
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
             createRecord();
          
          //setBaseUrl('https://api.gridetech.com/api/v1');

           
        
            //   $.ajax({
            //    url:  "https://gridetech.com/sendemail",
            //    type: "post",
            //  headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            // },
            //    data: $('#regForm').serialize(),
            //    beforeSend: function() {
                  
            //     $('.loader-container').show();
            //    },
        
            //    success: function(response, textStatus, jqXHR) {
            //     console.log("success");
            //          $('.loader-container').hide();
            //          $('#ignismyModal').modal('show');
        
            //          // $('#regForm').html('<h3 style="color:white;">Thank you for Signup . We will get back to you shortly</h3>');
            //      // window.location.replace("https://gridetech.com/mail/success");
            //    },
            //    error: function(jqXHR, textStatus, errorThrown) {
            //                  $('.loader-container').hide();
            //          $('#regForm').html('<h3 style="color:red;">Something went wrong please try again</h3>');
            //     console.log(errorThrown);
            //       //alertMessage(textStatus, jqXHR.responseJSON.message, "danger");
            //    }
            // });
        
            // return false;
             //document.getElementById("regForm").submit();
            // return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }


            var form= document.getElementById('regForm');

            $('.submit-form').click(function(){
               
            });
                
        
        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("tab");
          y = x[currentTab].getElementsByTagName("input");
          if(currentTab!=5){
              // A loop that checks every input field in the current tab:
              for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                  // add an "invalid" class to the field:
                  y[i].className += " invalid";
                  // and set the current valid status to false
                  valid = false;
                }
              } 
          }else{
                var rightimg = document.getElementById("right").files[0];
                if (!rightimg) {
                  // add an "invalid" class to the field:
                  document.getElementById("right").className += " invalid";
                  // and set the current valid status to false
                  valid = false;
                }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
        
            document.getElementsByClassName("step")[currentTab].className += " finish";

          }
          return valid; // return the valid status
        }
        
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("step");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }
        </script>
    
    <script>
console.log(getToken("admin"));
        function createRecord(){
            var form= $('#regForm')[0];
            var frm = new FormData(form);
            
            $.ajax({
                url: "https://api.gridetech.com/api/v1/user/transport/create/car",
                headers: {
                    Authorization: "Bearer " + getToken("admin")
                },
                type: 'POST',
                data: frm,
                processData: false,
                success: function(data){
                    alert('Record Added Successfull.');
                }

            });
        }
        $(function(){
          $('#terms').click(function() {
              if($(this).is(':checked')){
              $('#nextBtn').removeAttr("disabled");
              }else{
              $( "#nextBtn" ).prop( "disabled", true );
              }
          });
          
      });
      
       $(document).ready(function(){
      
         if($("#terms").prop('checked')==true){
             $('#nextBtn').removeAttr("disabled")
      
         }
        });
      
      </script>
      <script>
         function openNav() {
            document.getElementById("mySidenav").style.width = "50%";
         }

         function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
         }

         
      </script>
@stop