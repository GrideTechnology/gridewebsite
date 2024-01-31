@extends('common.user.layout.listing-base')
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
.requestmark{
    padding:1px 5px;
    background: #ffd0ba;
    margin-right: 5px;
}
.acceptmark{
    padding:1px 5px;   
    background: #fdcb52;
    margin-right: 5px;
}
.checkinmark{
    padding:1px 5px;    
    background: #f89e66;
    margin-right: 5px;
}
.activemark{   
    padding:1px 5px;
    background: #ff6600;
    margin-right: 5px;
}
.latemark{
    padding:1px 5px;    
    background: #d66e00;
    margin-right: 5px;
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

.MuiButtonBase-root .jss144 h1{
    color:#fff;
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
iframe.chartjs-hidden-iframe {
    box-shadow: none;
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
    height:100%;
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
    font-size: 1.7em;
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
    min-height: 75px;
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
.MuiGrid-root canvas{
    height:227px!important;
    width:227px!important;
}
    </style>

@stop
@section('content')
<div class="jss131"><div class="jss130"></div><div class="MuiContainer-root MuiContainer-maxWidthLg MuiContainer-fixed jss159 css-x3h831"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-3 css-1h77wgb" id="dashboard-home"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-8 css-efwuvd">
                                                        
                                                        
                                                        </div><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-4 css-19egsyp">
                                                            
                                                          
                                                            </div><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-md-12 MuiGrid-grid-lg-5 css-13xs5pw">
                                                            
                                                            <div class="MuiPaper-root MuiPaper-outlined MuiPaper-rounded MuiCard-root jss162 css-n1mihu"><div class="MuiCardContent-root css-1qw96cp"><div class="MuiGrid-root MuiGrid-container jss163 jss169 css-8rnkcc"><div class="MuiGrid-root MuiGrid-item css-1wxaqej"><span class="MuiTypography-root MuiTypography-h6 css-1u3xkte">Net Earnings</span></div><div class="MuiGrid-root MuiGrid-item css-1wxaqej"><a class="MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButtonBase-root  css-1jjjmie" tabindex="0" href="{{url('/')}}/owner/finance">View More<span class="MuiTouchRipple-root css-w0pj6f"></span></a></div></div><div class="MuiGrid-root MuiGrid-container css-1d3bbye"><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 css-309trg"><div class="MuiGrid-root MuiGrid-container jss166 css-1d3bbye"><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 jss167 css-9zuxvs"><span class="MuiTypography-root MuiTypography-h4 css-18espmw"><span>$<span class="thrice"></span></span></span></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 css-9zuxvs"><span class="MuiTypography-root MuiTypography-body1 MuiTypography-alignCenter css-1w8ulrm">Past 3 Days</span></div></div></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 css-309trg"><div class="MuiGrid-root MuiGrid-container jss166 css-1d3bbye"><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 jss167 css-9zuxvs"><span class="MuiTypography-root MuiTypography-h4 css-18espmw"><span>$<span class="weekly"></span></span></span></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 css-9zuxvs"><span class="MuiTypography-root MuiTypography-body1 MuiTypography-alignCenter css-1w8ulrm">Past 7 Days</span></div></div></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 css-309trg"><div class="MuiGrid-root MuiGrid-container jss166 css-1d3bbye"><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 jss167 css-9zuxvs"><span class="MuiTypography-root MuiTypography-h4 css-18espmw"><span>$<span class="halfmonth"></span></span></span></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 css-9zuxvs"><span class="MuiTypography-root MuiTypography-body1 MuiTypography-alignCenter css-1w8ulrm">Past 14 Days</span></div></div></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 css-309trg"><div class="MuiGrid-root MuiGrid-container jss166 css-1d3bbye"><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 jss167 css-9zuxvs"><span class="MuiTypography-root MuiTypography-h4 css-18espmw"><span>$<span class="monthly"></span></span></span></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 css-9zuxvs"><span class="MuiTypography-root MuiTypography-body1 MuiTypography-alignCenter css-1w8ulrm">Past 30 Days</span></div></div></div></div></div></div></div><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-md-12 MuiGrid-grid-lg-7 css-1djztpa"><div class="MuiPaper-root MuiPaper-outlined MuiPaper-rounded MuiCard-root jss162 css-n1mihu"><div class="MuiCardContent-root css-1qw96cp"><div class="MuiGrid-root MuiGrid-container jss163 jss171 css-8rnkcc"><div class="MuiGrid-root MuiGrid-item css-1wxaqej"><span class="MuiTypography-root MuiTypography-h6 css-1u3xkte">Rental Status</span></div><div class="MuiGrid-root MuiGrid-item css-1wxaqej"><a class="MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButtonBase-root  css-1jjjmie" tabindex="0" href="{{url('/')}}/owner/rentals">View More<span class="MuiTouchRipple-root css-w0pj6f"></span></a></div></div><div class="MuiGrid-root MuiGrid-container css-116iflt"><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 css-himpyl"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>

                                                            <!-- <img src="https://gridetech.com/assets/layout/images/circle.png" alt=""> -->
                                                        <canvas id="graph"></canvas>
                                                    
                                                    </div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 css-309trg"><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-direction-xs-column MuiGrid-grid-xs-12 jss170 css-fdrl1f"><span class="MuiTypography-root MuiTypography-h6 css-1u3xkte"><span class="requestmark"></span><span id="requests">0</span> Requested</span></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-direction-xs-column MuiGrid-grid-xs-12 jss170 css-fdrl1f"><span class="MuiTypography-root MuiTypography-h6 css-1u3xkte"><span class="acceptmark"></span><span id="accepted">0</span> Accepted</span></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-direction-xs-column MuiGrid-grid-xs-12 jss170 css-fdrl1f"><span class="MuiTypography-root MuiTypography-h6 css-1u3xkte"><span class="checkinmark"></span><span id="checkedin">0</span> Check-in</span></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-direction-xs-column MuiGrid-grid-xs-12 jss170 css-fdrl1f"><span class="MuiTypography-root MuiTypography-h6 css-1u3xkte"><span class="activemark"></span><span id="active">0</span> Active</span></div><div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-direction-xs-column MuiGrid-grid-xs-12 jss170 css-fdrl1f"><span class="MuiTypography-root MuiTypography-h6 css-1u3xkte"><span class="latemark"></span><span id="late">0</span> Late</span></div></div></div></div></div></div>
                                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 MuiGrid-grid-lg-4 css-170ukis">
                                                        <div class="MuiPaper-root MuiPaper-outlined MuiPaper-rounded MuiCard-root jss172 css-n1mihu">
                                                            <div class="MuiCardContent-root jss173 css-1qw96cp">
                                                                <div class="MuiGrid-root MuiGrid-container jss163 jss184 css-8rnkcc">
                                                                    <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                                                        <span class="MuiTypography-root MuiTypography-h6 css-1u3xkte">
                                                                            <span id="tpickup">1</span> Pickups Today
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="jss174" id="todayPickup"></div>
                                                        </div>
                                                    </div>
                                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 MuiGrid-grid-lg-4 css-170ukis">
                                                        <div class="MuiPaper-root MuiPaper-outlined MuiPaper-rounded MuiCard-root jss172 css-n1mihu">
                                                            <div class="MuiCardContent-root jss173 css-1qw96cp">
                                                                <div class="MuiGrid-root MuiGrid-container jss163 jss184 css-8rnkcc">
                                                                    <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                                                        <span class="MuiTypography-root MuiTypography-h6 css-1u3xkte">
                                                                            <span id="topickup">1</span> Pickups Tomorrow
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="jss174" id="tomPickup"></div>
                                                        </div>
                                                    </div>
                                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 MuiGrid-grid-lg-4 css-170ukis">
                                                        <div class="MuiPaper-root MuiPaper-outlined MuiPaper-rounded MuiCard-root jss172 css-n1mihu">
                                                            <div class="MuiCardContent-root jss173 css-1qw96cp">
                                                                <div class="MuiGrid-root MuiGrid-container jss163 jss184 css-8rnkcc">
                                                                    <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                                                        <span class="MuiTypography-root MuiTypography-h6 css-1u3xkte">
                                                                            <span id="updatescount">1</span> Listings Need Updates
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="jss174" id="expiredDoc"></div>
                                                        </div>
                                                    </div>

                                                </div></div></div></div></div>
@stop
@section('scripts')
@parent
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js'></script>
<script>
if(getToken('owner')==null){
   window.location.href='https://gridetech.com/owner/login';
}
$.ajax({
        url: getBaseUrl()+"/user/transport/owner-dashboard",
        type: "GET",
        headers: {
            Authorization: "Bearer " + getToken("owner")
        },
        success: function(response){
           
           var request = response.responseData.pending;
           var accept = response.responseData.accept;
           var active = response.responseData.active;
           var checkedin = response.responseData.checkedin;
           var cancel = response.responseData.cancel;
           var complete = response.responseData.complete;
           var late = response.responseData.late;

           var thrice = response.responseData.thrice;
           var weekly = response.responseData.weekly;
           var halfmonth = response.responseData.halfmonth;
           var monthly = response.responseData.monthly;

           $('.thrice').text(thrice);
           $('.weekly').text(weekly);
           $('.halfmonth').text(halfmonth);
           $('.monthly').text(monthly);

           $('#requests').text(request);
           $('#accepted').text(accept);
           $('#active').text(active);
           $('#checkedin').text(checkedin);
           $('#cancel').text(cancel);
           $('#complete').text(complete);
           $('#late').text(late);


           var ctx = document.getElementById('graph').getContext('2d');
            var chart = new Chart(ctx, {
              type: 'doughnut',
              data: {
                labels: ["Requested", "Accepted", "Check-in", "Active", "Late"],
                datasets: [{
                  label: ["Requested", "Accepted", "Check-in", "Active", "Late"],
                  backgroundColor: [
                  "#ffd0ba", "#fdcb52", "#f89e66", "#ff6600", "#d66e00"],

                  data: [request, accept, checkedin, active, late] }] },


              options: {
                legend: {
                  display: false },

                tooltips: {
                  enabled: true,
                  mode: 'index',
                  callbacks: {
                    label: function (tooltipItems, data) {
                      var i,label = [],l = data.datasets.length;
                      for (i = 0; i < l; i += 1) {if (window.CP.shouldStopExecution(0)) break;
                        label[i] = data.datasets[i].label + ': ' + data.datasets[i].data[tooltipItems.index] + '%';
                      }window.CP.exitedLoop(0);
                      return label;
                    } } } } });

           
        }
    });

$.ajax({
    type:"GET",
    url: getBaseUrl()+'/user/transport/documentstatus',
    headers: {
        Authorization: "Bearer " + getToken("owner")
    },
    success:function(data){
            var carsexp=data.responseData;
            $('#updatescount').html(carsexp.length);

            var expcars='';
            carsexp.forEach(function(item, index){
                expcars+='<div class="jss187 jss193"><div class="MuiAvatar-root MuiAvatar-circular jss192 jss196 css-1o5gwq2"><a href="{{url("/")}}/owner/edit-listing/'+item.id+'"><img src="'+item.right+'" class="MuiAvatar-img css-1hy9t21"></a></div><div><a href="{{url("/")}}/owner/edit-listing/'+item.id+'"><p class="MuiTypography-root MuiTypography-body1 jss190 css-11ujx7e">'+item.vin+'</p><p class="MuiTypography-root MuiTypography-body1 jss189 jss194 css-11ujx7e">'+item.model+'</p><p class="MuiTypography-root MuiTypography-body1 jss191 jss195 css-11ujx7e">Documents expiring on '+item.inspection_exp+'</p><a/></div></div>';
            });

            $('#expiredDoc').html(expcars);
        }
});

$.ajax({
    type:"GET",
    url: getBaseUrl()+'/user/transport/pickups',
    headers: {
        Authorization: "Bearer " + getToken("owner")
    },
    success:function(data){
            var today=data.responseData.today;
            var tomorrow=data.responseData.tomorrow;
            $('#tpickup').html(today.length);
            $('#topickup').html(tomorrow.length);

            var todaypickup='';
            var tomorrowpickup='';
            today.forEach(function(item, index){  
                todaypickup+='<div class="jss187 jss193"><div class="MuiAvatar-root MuiAvatar-circular jss192 jss196 css-1o5gwq2" style="background:#000"><a href="{{url("/")}}/owner/edit-listing/'+item.id+'"><img src="https://api.gridetech.com/storage/app/public/1/menus/8f49b93644d4e8daa51b2cd6a8ec135485934a73.png" class="MuiAvatar-img css-1hy9t21"></a></div><div><a href="{{url("/")}}/rental/car/'+item.car_id+'/info"><p class="MuiTypography-root MuiTypography-body1 jss189 jss194 css-11ujx7e">'+item.model+'</p><p class="MuiTypography-root MuiTypography-body1 jss191 jss195 css-11ujx7e">Booked By '+item.fname+' '+item.lname+'</p><a/></div></div>';
            });

            tomorrow.forEach(function(item, index){
                tomorrowpickup+='<div class="jss187 jss193"><div class="MuiAvatar-root MuiAvatar-circular jss192 jss196 css-1o5gwq2" style="background:#000"><a href="{{url("/")}}/owner/edit-listing/'+item.id+'"><img src="https://api.gridetech.com/storage/app/public/1/menus/8f49b93644d4e8daa51b2cd6a8ec135485934a73.png" class="MuiAvatar-img css-1hy9t21"></a></div><div><a href="{{url("/")}}/rental/car/'+item.car_id+'/info"><p class="MuiTypography-root MuiTypography-body1 jss189 jss194 css-11ujx7e">'+item.model+'</p><p class="MuiTypography-root MuiTypography-body1 jss191 jss195 css-11ujx7e">Booked By '+item.fname+' '+item.lname+'</p><a/></div></div>';
            });

            $('#todayPickup').html(todaypickup);
            $('#tomPickup').html(tomorrowpickup);
        }
});
</script>

@stop