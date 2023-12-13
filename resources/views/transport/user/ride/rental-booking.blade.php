@extends('common.user.layout.rental-base')
{{ App::setLocale(  isset($_COOKIE['user_language']) ? $_COOKIE['user_language'] : 'en'  ) }}
@section('styles')
@parent
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
    body{
        margin:8px!important;
    }
    div#map, div#map div {
    height: 100%;
}
div#map div iframe ~ div {
    display: none;
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
/*.jss159 {
    padding: 48px 32px;
}*/
.jss159 {
    padding: 7px 32px;
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

#rental-form select {
    margin-bottom: 20px !important;
    background: none;
    border: 1px solid #767676;
    font-size: 14px;
    height: auto;
    box-shadow: none;
    font-weight: 400;
    resize: none;
    color: #7e8085;
    width: auto;
    min-height: 27px;
    border-radius: 2px !important;
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
.css-cuujzo:hover {
    color: #fff;
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
    height:220px;
    object-fit: cover;
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
.submit-btn {
    background-color: #f26822;
    font-size: 14px;
    color: white;
    cursor: pointer;
    border: solid 1px white;
    padding: 10px 20px !important;
    margin-top: 10px;
    float:left;
}
.submit-btn:hover {
    background-color: white;
    color: #f26822;
    border: solid 1px #f26822;
    cursor: pointer;
}
.options{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    margin-top: 10px;
}
.options div{
    margin:auto;
}
.options div .pac-target-input{
    border: 1px solid #767676;
    font-size: 14px;
    margin-bottom: 18px;
    border-radius: 2px!important;
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
@media(max-width: 500px){
body.index section.car-grid img{
      width:100% !important;
}
body.index section.car-grid {
      display:block;
      grid-template-columns: 1fr;
}
}
section.car-grid img {
    width: 100% !important;
    max-width: 100%;
}
.car-grid div {
    border: 1px solid rgba(77, 75, 75, 0.75);
    margin: 30px 15px;
}
section.car-grid {
    display: flex;
    flex-wrap: wrap;
    padding: 20px;
}
section.car-grid a {
    width: 50%;
    margin-bottom:20px;
}

@media(max-width: 1267px){
section.car-grid a {
    width: 33%;
}
}

@media(max-width: 990px){
section.car-grid a {
    width: 50%;
}
}

@media(max-width: 600px){
section.car-grid a {
    width: 100%;
}
}
section.car-grid a div {
    height: 100%;
    margin-bottom: 0;
}
.price-range-slider {
  width: 100%;
  float: left;
  display:flex;
}
.price-range-slider .range-value {
  margin: 0;
}
.price-range-slider .range-value input {
  width: 100%;
  background: none;
  color: #000;
  font-size: 16px;
  font-weight: initial;
  box-shadow: none;
  border: none;
}
.price-range-slider .range-bar {
  border: none;
  background: #000;
  height: 3px;
  width: 96%;
  margin-left: 8px;
  margin-top:12px;
}
.price-range-slider .range-bar .ui-slider-range {
  background: #f26822;
}
.price-range-slider .range-bar .ui-slider-handle {
  border: none;
  border-radius: 25px;
  background: #fff;
  border: 2px solid #f26822;
  height: 17px;
  width: 17px;
  top: -0.52em;
  cursor: pointer;
}
.price-range-slider .range-bar .ui-slider-handle + span {
  background: #f26822;
}
</style>
@stop
@section('content')
                                                        
                                                <div class="jss131"><div class="jss130"></div>
                                                        
                                                        <div class="MuiContainer-root MuiContainer-maxWidthLg MuiContainer-fixed jss159 css-x3h831">
                                                            <div class="options" id="rental-form">
                                                                <div>
                                                                <label for="location">Location:</label> <br>
                                                                <input type="text" class="main-text form-control" id="location_input" placeholder="Enter your location" ></div>
                                                               
                                                                <div>
                                                                    <label for="location">Price Range:</label> <br>
                                                                    <div class="price-range-slider">
                                                                        <!-- <select >
                                                                          <option  value="" selected>Select price</option>
                                                                          <option value="20">$20</option>
                                                                          <option value="30">$30</option>
                                                                          <option value="40" >$40</option>
                                                                          <option value="50" >$50</option>
                                                                          <option value="60" >$60</option>
                                                                          <option value="70" >$70</option>
                                                                          <option value="80" >$80</option>
                                                                          <option value="90" >$90</option>
                                                                          <option value="100" >$100</option>
                                                                          <option value="110" >$110</option>
                                                                          <option value="120" >$120</option>
                                                                          <option value="130" >$130</option>
                                                                          <option value="140" >$140</option>
                                                                          <option value="150" >$150</option>
                                                                        </select> -->
                                                                         <p class="range-value">
                                                                        <input type="text" id="amount" value="$0 - $150" readonly>
                                                                              </p>
                                                                        <input type="hidden" id='pricestart' value="0">
                                                                        <input type="hidden" id='priceend' value="150">
                                                                          <div id="slider-range" class="range-bar"></div>
                                                                    </div>
                                                                </div>
                                                                <div>

                                                                <label for="location">Sort by:</label> <br>
                                                                <select class="form-control" name="order" id="order">
                                                                  <option value="" selected>Relevance</option>
                                                                  <option value="asc">Price low to high</option>
                                                                  <option value="desc">Price high to low</option>
                                                                  <option value="distance" >Distance</option>
                                                                  
                                                                </select></div>

                                                                <div>
                                                                <button type="button" class="submit-btn" onclick="filtercars()">Filter</button></div>
                                                            </div>
                                                            <div class="topnav2" >
                                                                <a href="#" class="main-help">Rentals</a>
                                                                   <span id="typelist">
                                                                   </span>
                                                                  </div>
                                                            <div class="row">
                                                                <div class="col-md-8 col-lg-8 col-sm-12">
                                                                    <section class="car-grid">

                                                                    </section>
                                                                </div>
                                                                <div class="col-md-4 col-lg-4 col-sm-12">
                                                                    <div id="map">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    
                                                    
                                                    </div>
                                                </div>
@stop
@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/layout/js/map.js') }}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{Helper::getSettings()->site->browser_key}}&libraries=places&callback=initMap" async defer></script>
<script>
function initMap() {

    var input = document.getElementById('location_input');
    var defaultBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(34.1352786, -94.6107576),
    new google.maps.LatLng(34.1352786, -94.6107576));

    var defaultPlace = new google.maps.LatLng(34.1352786, -94.6107576);

    var options = {
                    location: defaultPlace,
                    componentRestrictions: {country: 'US'}
                };
    var autocomplete = new google.maps.places.Autocomplete(input, options);
    autocomplete.addListener('place_changed', function () {
        var place = autocomplete.getPlace();
        document.getElementById('location').innerHTML = place.name;
    });



    var url = getBaseUrl() + "/user/transport/cars-list/"+"{{$id}}";

        $.ajax({
            type:"GET",
            url: url,
            'beforeSend': function (request) {
                showLoader();
            },
            success:function(data){
                    var vehicles=data.responseData.carlist;
                    var vehicleList='';
                    var typeList='';
                    var i=0;
                    var carspoint = [];
                    vehicles.forEach(function(item, index){
                        
                        var address = item.pickup_address;

                       $.ajax({
                            'async': false,
                            'type': "POST",
                            'global': false,
                            'dataType': 'html',
                            'url':'https://maps.googleapis.com/maps/api/geocode/json?address='+address.replace(" ", "+")+'&key={{Helper::getSettings()->site->browser_key}}',
                            'data': {'type': 'data'},
                            'success': function (result) {
                           
                             response = JSON.parse(result);
                             lat=response.results[0].geometry.location.lat;
                             long=response.results[0].geometry.location.lng;

                             loc = JSON.stringify({title: address+' ($'+item.daily_charges+')', lat: lat, long: long});
                            
                             carspoint.push(loc);
                             //console.log(response.results[0].geometry.location.lat);

                            }
                        });


                        vehicleList+='<a href="{{url("/")}}/user/rental/car/'+item.id+'/info"><div><img src="'+item.right+'" ><h4>'+item.model+'</h4><p>$'+item.daily_charges+' / Day</p></div></a>'
                        
                    });

                    

                    const map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 5,
                        center: { lat: 34.1352786, lng: -94.6107576 },
                    });

                    
                    setMarkers(map, carspoint);

                    if(vehicles.length==0){
                        vehicleList='<p>No Result Found.</p>';
                    }

                    $('.car-grid').html(vehicleList);

                    var types=data.responseData.typelist;
                    var typeList='';
                    var i=1;
                    types.forEach(function(item, index){
                        var isActive='';
                        if(item.id=="{{$id}}"){
                            typeList+='<a  class="active" href="{{url("/")}}/user/rental/booking/'+item.id+'">'+item.name+'</a>';
                        }else{
                            typeList+='<a  href="{{url("/")}}/user/rental/booking/'+item.id+'">'+item.name+'</a>';
                        }
                    });

                    $('#typelist').html(typeList);
                     hideLoader();
            }
        });
}

</script>
<script>


// function filtercars(){
//     var current_latitude = 34.1352786;
//     var current_longitude = -94.6107576;



//     if( navigator.geolocation ) {
//        navigator.geolocation.getCurrentPosition( success, fail );
//     } else {
//         console.log('Sorry, your browser does not support geolocation services');
//     }
// }

// function success(position)
// {
//     // document.getElementById('long').value = position.coords.longitude;
//     // document.getElementById('lat').value = position.coords.latitude

//     if(position.coords.longitude != "" && position.coords.latitude != ""){
//         current_longitude = position.coords.longitude;
//         current_latitude = position.coords.latitude;
//         var url = getBaseUrl() + "/user/transport/cars-filter/"+{{$id}};
//         $.ajax({
//             type:"POST",
//             url: url,
//             headers: {
//                 Authorization: "Bearer " + getToken("admin")
//             },
//             data: {long: current_longitude, lat:current_latitude},
//             'beforeSend': function (request) {
//                 showLoader();
//             },
//             success:function(data){
//                 var vehicles=data.responseData.carlist;
//                 var vehicleList='';
//                 var typeList='';
//                 var i=0;
//                 vehicles.forEach(function(item, index){
                   
//                     vehicleList+='<a href="{{url("/")}}/rental/car/'+item.id+'/info"><div><img src="'+item.right+'" ><h4>'+item.model+'</h4><p>$'+item.daily_charges+' / Day</p></div></a>';
//                 });


//                 if(vehicles.length==0){
//                     vehicleList='<p>No Result Found.</p>';
//                 }
//                 $('.car-grid').html(vehicleList);

//                hideLoader();
//             }
//         });
//     }

// }

 
function filtercars(){
    var url = getBaseUrl() + "/user/transport/cars-filter/"+{{$id}};
    var location=$('#location_input').val();
    var pricestart=$('#pricestart').val();
    var priceend=$('#priceend').val();
    var order=$('#order').val();

    if(order=='distance' && location==''){
       var current_latitude = 34.1352786;
        var current_longitude = -94.6107576;

        if( navigator.geolocation ) {
           navigator.geolocation.getCurrentPosition( success, fail );
        } else {
            console.log('Sorry, your browser does not support geolocation services');
        }

        function success(position)
        {
            if(position.coords.longitude != "" && position.coords.latitude != ""){
                current_longitude = position.coords.longitude;
                current_latitude = position.coords.latitude;
                $.ajax({
                    type:"POST",
                    url: url,
                    headers: {
                        Authorization: "Bearer " + getToken("admin")
                    },
                    data: {long: current_longitude, lat:current_latitude, order: order, pricestart: pricestart, priceend:priceend},
                    'beforeSend': function (request) {
                        showLoader();
                    },
                    success:function(data){
                        var carlist = data.responseData.carlist;

                        var carListhtml='';
                        var carspoint=[];
                        carlist.forEach(function(item, index){

                            var address = item.pickup_address;

                           $.ajax({
                                'async': false,
                                'type': "POST",
                                'global': false,
                                'dataType': 'html',
                                'url':'https://maps.googleapis.com/maps/api/geocode/json?address='+address.replace(" ", "+")+'&key={{Helper::getSettings()->site->browser_key}}',
                                'data': {'type': 'data'},
                                'success': function (result) {
                               
                                 response = JSON.parse(result);
                                 lat=response.results[0].geometry.location.lat;
                                 long=response.results[0].geometry.location.lng;

                                 loc = JSON.stringify({title: address+' ($'+item.daily_charges+')', lat: lat, long: long});
                                
                                 carspoint.push(loc);
                                 //console.log(response.results[0].geometry.location.lat);

                                }
                            });

                            carListhtml += '<a href="{{url("/")}}/rental/car/'+item.id+'/info"><div><img src="'+item.right+'" ><h4>'+item.model+'</h4><p>$'+item.daily_charges+' / Day</p></div></a>';
                        });

                        const map = new google.maps.Map(document.getElementById("map"), {
                            zoom: 5,
                            center: { lat: 34.1352786, lng: -94.6107576 },
                        });

                        
                        setMarkers(map, carspoint);

                        if(carlist.length==0){
                            carListhtml='<p>No Result Found.</p>';
                        }
                        $('.car-grid').html(carListhtml);

                       hideLoader();
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
    }else{


        $.ajax({
            type:"POST",
            url: url,
            headers: {
                Authorization: "Bearer " + getToken("admin")
            },
            data: {pricestart: pricestart, priceend: priceend, order:order, location:location},
            'beforeSend': function (request) {
                showLoader();
            },
            success:function(data){
                var carlist = data.responseData.carlist;

                var carListhtml='';
                var carspoint=[];
                    carlist.forEach(function(item, index){

                        var address = item.pickup_address;

                           $.ajax({
                                'async': false,
                                'type': "POST",
                                'global': false,
                                'dataType': 'html',
                                'url':'https://maps.googleapis.com/maps/api/geocode/json?address='+address.replace(" ", "+")+'&key={{Helper::getSettings()->site->browser_key}}',
                                'data': {'type': 'data'},
                                'success': function (result) {
                               
                                 response = JSON.parse(result);
                                 lat=response.results[0].geometry.location.lat;
                                 long=response.results[0].geometry.location.lng;

                                 loc = JSON.stringify({title: address+' ($'+item.daily_charges+')', lat: lat, long: long});
                                
                                 carspoint.push(loc);
                                 //console.log(response.results[0].geometry.location.lat);

                                }
                            });

                        carListhtml += '<a href="{{url("/")}}/rental/car/'+item.id+'/info"><div><img src="'+item.right+'" ><h4>'+item.model+'</h4><p>$'+item.daily_charges+' / Day</p></div></a>';
                    });

                const map = new google.maps.Map(document.getElementById("map"), {
                            zoom: 5,
                            center: { lat: 34.1352786, lng: -94.6107576 },
                        });

                        
                        setMarkers(map, carspoint);

                if(carlist.length==0){
                    carListhtml='<p>No Result Found.</p>';
                }
                $('.car-grid').html(carListhtml);

               hideLoader();
            }
        });
    }
}

$(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 150,
      values: [ 0, 150 ],
      slide: function( event, ui ) {
        $( "#pricestart" ).val(  ui.values[ 0 ] );
        $( "#priceend" ).val( ui.values[ 1 ] );
        var end = '';
        if(ui.values[ 1 ]==150){
           var end = '+';
        }
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]+end );
      }
    });
    $( "#pricestart" ).val(  $( "#slider-range" ).slider( "values", 0 ) );

    $( "#priceend" ).val($( "#slider-range" ).slider( "values", 1 ));

    // $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    //   " - $" + $( "#slider-range" ).slider( "values", 1 ) + end );
});


function setMarkers(map, points) {
  const image = {
    url: "https://developers.google.com/maps/documentation/javascript/examples/full/images/car.png",
    size: new google.maps.Size(20, 32),
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(0, 32),
  };
  const shape = {
    coords: [1, 1, 1, 20, 18, 20, 18, 1],
    type: "poly",
  };

 
  points.forEach(function(item, index){
    var point = JSON.parse(item);
    new google.maps.Marker({
      position: { lat: point.lat, lng: point.long },
      map,
      //icon: image,
      shape: shape,
      title: point.title,
    });
  });
}
</script>
@stop
