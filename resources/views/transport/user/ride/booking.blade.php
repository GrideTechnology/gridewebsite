@extends('common.user.layout.rental-base')
{{ App::setLocale(  isset($_COOKIE['user_language']) ? $_COOKIE['user_language'] : 'en'  ) }}
@section('styles')
@parent
<style>
    body{
        margin:8px!important;
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
#licence_state{
    border-radius: 2px!important;
    background: #fff;
    padding: 0px 30px;
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
	color:#fff!important;
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


body{
    font-family: proxima-nova, sans-serif;
}

h5 {
    margin-top: 1.67em!important;
    margin-bottom: 1.67em!important;
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
#bookingForm {
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
    font-weight: bold!important padding-left: 20px;
    color: #ffffffb1!important;
    text-align: left;
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
#bank-info, .isBooked{display: none;}
.isBooked{color: red;}
.payment-method{margin: 20px 0px}
.payment-method input[type="radio"]{
    position: relative;
    float: left;
    width: 50px;
    margin: 5px;
}
    </style>


@stop
@section('content')
<div class="jss119">
        <div class="jss129">
                                                        
                                                        <div class="jss131"><div class="jss130"></div>
                                                        
                                                        <div class="MuiContainer-root MuiContainer-maxWidthLg MuiContainer-fixed jss159 css-x3h831">
                                                            <div class="form-main">
                                                                <form id="bookingForm">
                                                                  
                                                                
                                                                    <div class="tab" style="display: block;">
                                                                        <h3>Rental</h3>
                                                                        <hr>
                                                                        <h4>Qualifications</h4>
                                                                    <h5>1. Must be a registered driver for Gride
                                                                        </h5>
                                                                        <h5>2. Must make a minimum of 20 trips a week</h5>
                                                                        <h5>3. Must be at least 21 years or older
                                                                            </h5>
                                                                            <h5>4. Must have a valid drivers license
                                                                            </h5> 
                                                                         
                                                                    </div>
                                                                
                                                                    
                                                                
                                                                
                                                                
                                                                    <div class="tab">
                                                                        <h3>Pricing</h3>
                                                                        <hr>
                                                                        <div class="col-md-12">
                                                                            <label class="rd">Daily
                                                                      <input type="radio" name="pricing" value="DAILY">
                                                                      <span class="checkmark"></span>
                                                                    </label>
                                                                    
                                                                            </div>
                                                                    
                                                                            <div class="col-md-12">
                                                                                <label class="rd">Weekly
                                                                          <input type="radio" name="pricing" value="WEEKLY">
                                                                          <span class="checkmark"></span>
                                                                        </label>
                                                                        
                                                                                </div>
                                                                        <h4>Pick-up date:</h4>
                                                                       <?php
                                                                            $days = $_GET['rentalDays'];
                                                                            $startdate = date('Y-m-d', strtotime($_GET['fromdate']));
                                                                            $enddate = date('Y-m-d', strtotime($_GET['fromdate']. ' + '.$days.' days'));
                                                                        ?>
                                                                        <div class="form-group">
                                                                            <input type="date"  id="pickup_date" name="pickup_date" value="{{$startdate}}" onchange="calculateTotal()">
                                                                          </div>
                                                                          <h4>Drop-off date:</h4>
                                                                        <div class="form-group">
                                                                            <input type="date"  id="drop_date" name="drop_date" value="{{$enddate}}" onchange="calculateTotal()" >
                                                                          </div>
                                                                          <input type="hidden" name="days" id="days" value="<?=$_GET['rentalDays']?>">
                                                                        <p class="isBooked">Car is already booked in between your date range.</p>
                                                                          <h4>You pay:</h4>
                                                                          
                                                                          <h5><span class="amount"></span> x <span class="days">1</span> Days = $<span class="amount_total"></span> </h5>
                                                                              <h5>Insurance Fee ($<span class="insurance_fee"></span> x <span class="days">1</span> Days) = $<span class="insurance_fee_total"></span> </h5>
                                                                                  <h5>Booking Fee ($<span class="trip_fee"></span> x <span class="days">1</span> Days)= $<span class="trip_fee_total"></span>
                                                                                </h5>
                                                                                  <h5>Sales Tax (<span class="sales_tax"></span>%) = $<span class="sales_tax_total"></span> </h5>
                                                                            <h5 style="color:white;">Total: $<span class="total_amount"></span></h5>
                                                                            </div>
                                                                
                                                                         
                                                                
                                                                    
                                                                            <div class="tab">
                                                                                <h3>Payment</h3>
                                                                                <hr>
                                                                                <h5 style="color:white; text-align: center;" >Total: $<span class="total_amount"></span></h5>
                                                                               <!--  <h4>Drivers license number:</h4>
                                                                                <div class="form-group">
                                                                                    <input type="text" placeholder="Drivers license number" id="licence_number" name="licence_number">
                                                                                  </div>
                                                                                  <h4>Drivers license state:</h4>
                                                                                <div class="form-group">
                                                                                    <select id="licence_state" name="licence_state">
                                                                                    </select>
                                                                                  </div> -->
                                                                                <h4>First Name</h4>
                                                                                <div class="form-group">
                                                                                    <input type="text" placeholder="First Name" id="fname" name="fname">
                                                                                  </div>
                                                                                  <h4>Last Name</h4>
                                                                                  <div class="form-group">
                                                                                      <input type="text" placeholder="Last Name" id="lname" name="lname">
                                                                                    </div>
                                                                                 
                                                                                    <h4>Zip code</h4>
                                                                                    <div class="form-group">
                                                                                        <input type="text" placeholder="Zip code" id="zipcode" name="zipcode">
                                                                                      </div>
                                                                                    
                                                                                    <h4>Payment Method</h4>
                                                                                    <div class="form-group payment-method">
                                                                                            
                                                                                        <label for="test1">Credit Card <input type="radio" id="card" name="method" value="card" checked></label>
                                                                                    
                                                                                        
                                                                                        <label for="test2">Bank <input type="radio" id="bank" name="method" value="bank"></label>
                                                                                    </div>
                                                                                    <div id="card-info">
                                                                                    <h4>Credit/Debit card number:</h4>
                                                                                    <div class="form-group">
                                                                                        <input type="number" placeholder="Credit card number" id="card_number" name="card_number">
                                                                                      </div>
                                                                                      <h4>Security code:</h4>
                                                                                      <div class="form-group">
                                                                                          <input type="number" placeholder="Security code" id="card_cvv" name="card_cvv">
                                                                                        </div>
                                                                                        <h4>Expiration date:</h4>
                                                                                        <select name='card_exp_month' id='card_exp_month'>
                                                                                            <option value=''>Month</option>
                                                                                            <option value='01'>January</option>
                                                                                            <option value='02'>February</option>
                                                                                            <option value='03'>March</option>
                                                                                            <option value='04'>April</option>
                                                                                            <option value='05'>May</option>
                                                                                            <option value='06'>June</option>
                                                                                            <option value='07'>July</option>
                                                                                            <option value='08'>August</option>
                                                                                            <option value='09'>September</option>
                                                                                            <option value='10'>October</option>
                                                                                            <option value='11'>November</option>
                                                                                            <option value='12'>December</option>
                                                                                        </select> 
                                                                                        <select name='card_exp_year' id='card_exp_year'>
                                                                                            <option value=''>Year</option>
                                                                                            <?php 
                                                                                            $date = date('Y-m-d');        
                                                                                            $year=date('Y',strtotime($date));
                                                                                            $uptoyear = $year+10;
                                                                                            for($i=$year; $i<=$uptoyear; $i++){
                                                                                            $syr = str_split($i,2);
                                                                                            ?>
                                                                                            <option value='<?=$syr["1"]?>'><?=$i?></option>
                                                                                            <?php } ?>
                                                                                        </select> 
                                                                                      
                                                                                    </div>
                                                                                    <div id="bank-info">
                                                                                        <h4>Account Number:</h4>
                                                                                        <div class="form-group">
                                                                                            <input type="number" placeholder="Account Number" id="account_number" name="account_number">
                                                                                        </div>
                                                                                        <h4>Routing Number:</h4>
                                                                                        <div class="form-group">
                                                                                            <input type="number" placeholder="Routing Number" id="routing_no" name="routing_no">
                                                                                        </div>
                                                                                    </div>
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
  <script src="https://code.jquery.com/jquery-3.7.0.js" ></script>
  <script type="text/javascript">

  
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
            }
            if (n == (x.length - 1)) {
              document.getElementById("nextBtn").innerHTML = "Submit";
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
             
          console.log(currentTab);
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                $('.tab').css('display', 'block');
              // ... the form gets submitted:
                    createBooking();
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
          }
          
          function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
              // If a field is empty...
                
                if (y[i].value == "") {
                    if($('input[name=method]:checked').val()=='card'){

                        if(y[i].getAttribute('id')!='account_number' || y[i].getAttribute('id')!='routing_no'){
                            continue;
                        }

                        y[i].className += " invalid";
                        valid = false;
                    
                    }
                    if($('input[name=method]:checked').val()=='bank'){
                        if(y[i].getAttribute('id')!='card_number' || y[i].getAttribute('id')!='card_cvv' || y[i].getAttribute('id')!='card_exp_month' || y[i].getAttribute('id')!='card_exp_year'){
                            continue;
                        }
                        
                        y[i].className += " invalid";
                        valid = false;
                        
                    }
                }

              if($('input[name=method]:checked').val()=='card'){
                  if(!validate_creditcardnumber(y[i].value) && y[i].getAttribute('id')=='card_number'){
                     y[i].className += " invalid";
                     alert("Please enter a valid card number");
                    valid = false;
                  }
              }

            } 

            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
              document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
          }

          function validate_creditcardnumber(inputNum) {
            var digit, digits, flag, sum, _i, _len;
            flag = true;
            sum = 0;
            digits = (inputNum + '').split('').reverse();
            for (_i = 0, _len = digits.length; _i < _len; _i++) {
              digit = digits[_i];
              digit = parseInt(digit, 10);
              if ((flag = !flag)) {
                digit *= 2;
              }
              if (digit > 9) {
                digit -= 9;
              }
              sum += digit;
            }
            return sum % 10 === 0;
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

          function createBooking(){
                $.ajax({
                    url: getBaseUrl() + "/user/transport/{{$id}}/bookcar",
                    headers: {
                        Authorization: "Bearer " + getToken("user")
                    },
                    processData: false, 
                    contentType: false,
                    type: 'POST',
                    'beforeSend': function (request) {
                        showLoader();
                    },
                    data: new FormData(document.getElementById("bookingForm")),
                    success:function(data){
                        $('.tab').css('display', 'none');
                        $('.tab').last().css('display', 'block');
                        hideLoader();
                        alert('You have booked your rental successfull.');
                        window.location.href="{{url('/')}}/user/rental/listing"; 
                    },
                    error: function(data){
                        console.log(data.responseJSON.error);
                    }
                });
          }
          </script>
      
      <script>
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
<script>
    $.ajax({
        type:"GET",
        url: getBaseUrl() + "/user/states",
        headers: {
            Authorization: "Bearer " + getToken("user")
        },
        'beforeSend': function (request) {
            showInlineLoader();
        },
        success:function(data){
               var cities = data.responseData;
                $('#licence_state').append('<option value="">--Select State--</option>');
               cities.forEach(function(item, index){
                    $('#licence_state').append('<option value="'+item.id+'">'+item.state_name+'</option>');
               });
                hideInlineLoader();
             }
    });


    var url = getBaseUrl() + "/user/transport/cars-details/"+"{{$id}}";

    if(getToken('user')==null){
       window.location.href='https://gridetech.com/user/login';
    }

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

                 $('.amount').html(carData.daily_charges);
                
                $('.insurance_fee').html(admincharges.insurance_fee);
                $('.sales_tax').html(admincharges.sales_tax);
                $('.trip_fee').html(admincharges.booking_fee);
                

                calculateTotal();
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
       
    }
});

function calculateTotal(){
    var start = $('#pickup_date').val();
    var end = $('#drop_date').val();

    $.ajax({
        url: getBaseUrl() + "/user/transport/car-availability/{{$id}}",
        type: 'POST',
        headers: {
                Authorization: "Bearer " + getToken("user")
            },
        data: {start: start, end: end},
        success: function(response){
            var response = response.responseData;
            if(response.length>0 || response>0){
                $('.isBooked').show();
                $('#nextBtn').css('pointer-events', 'none');

            }else{
                var startDay = new Date(start);
                var endDay = new Date(end);
                const oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
                const firstDate = new Date(start);
                const secondDate = new Date(end);

                const days = Math.round(Math.abs((firstDate - secondDate) / oneDay));
                if(days==0){
                    days=1;
                }
                $('#days').val(days);
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

                $('.amount_total').html(amount_total.toFixed(2));
                $('.insurance_fee_total').html(insurance_fee_total.toFixed(2));
                $('.sales_tax_total').html(sales_tax_total.toFixed(2));
                $('.trip_fee_total').html(trip_fee_total.toFixed(2));

                $('.total_amount').html(total_amount.toFixed(2));
                $('#nextBtn').css('pointer-events', 'auto');
                $('.isBooked').hide();
            }

       }
    });


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
     
     $('#licence_number').val(result.licence_number);
     if(result.licence_number!==''){
        $('#licence_number').attr('readonly', 'true');
     }
    }
});


$('#card').click(function(){
    $('#card-info').show();
    $('#bank-info').hide();
});

$('#bank').click(function(){
    $('#card').removeAttr('checked');
    $('#card-info').hide();
    $('#bank-info').show();
});
</script>
@stop