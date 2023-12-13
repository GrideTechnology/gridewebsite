@extends('common.user.layout.listing-base')
{{ App::setLocale(  isset($_COOKIE['user_language']) ? $_COOKIE['user_language'] : 'en'  ) }}
@section('styles')
@parent
<link rel="stylesheet"  type='text/css' href="{{ asset('assets/plugins/cropper/css/cropper.css')}}" />
<style type="text/css">
  .pac-container{
    z-index: 999999999!important;
  }
  .content-box{
  	width:100%;
  }
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
.jss537 {
    padding: 16px 0px;
}
.jss538 {
    padding: 0px 16px;
}
.jss539 {
    padding: 0px 16px;
}
.jss540 {
    width: 335px;
    margin-right: 16px;
}
.jss542 {
    flex-grow: 1;
}
.jss544 {
    color: #000;
    display: flex;
    flex-grow: 1;
    align-items: center;
}
.jss548 {
    padding: 16px 0px;
}
.jss549 {
    display: flex;
    flex-wrap: wrap;
}
.jss550 {
    margin: 0px 8px;
}
.jss552 {
    margin-right: 8px;
}
.jss553 {
    display: flex;
    align-items: center;
    margin-right: 8px;
}
.jss556 {
    z-index: 100;
    font-weight: 700;
}
.jss558 {
    overflow: auto;
    position: relative;
}
.jss561 {
    cursor: pointer;
}
.jss570 {
    background: rgb(255, 255, 255);
}
.jss571 {
    max-height: 510px;
    min-height: 510px;
}
.jss573 {
    padding: 16px 16px;
    justify-content: flex-end;
}
.jss574 {
    margin-left: 32px;
    margin-right: 64px;
}

.MuiButtonBase-root .jss144 h1 {
    color: #fff;
}

label + .css-pr0055 {
    margin-top: 16px;
}
.css-pr0055::before {
    border-bottom: 1px solid rgba(0, 0, 0, 0.42);
    left: 0px;
    bottom: 0px;
    content: " ";
    position: absolute;
    right: 0px;
    transition: border-bottom-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    pointer-events: none;
}
.css-pr0055::after {
    border-bottom: 2px solid rgb(3, 169, 244);
    left: 0px;
    bottom: 0px;
    content: "";
    position: absolute;
    right: 0px;
    transform: scaleX(0);
    transition: transform 200ms cubic-bezier(0, 0, 0.2, 1) 0ms;
    pointer-events: none;
}
.css-39bbo6 {
    margin: 0px;
    flex-shrink: 0;
    border-width: 0px 0px thin;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0.12);
}
.css-cly2df {
    display: table;
    width: 100%;
    border-collapse: separate;
    border-spacing: 0px;
}
.css-1wbz3t9 {
    display: table-header-group;
}
.css-1lzq4x8 {
    color: inherit;
    display: table-row;
    vertical-align: middle;
    outline: 0px;
}
.css-1ul47bz {
    box-sizing: border-box;
    display: flex;
    flex-flow: row wrap;
    width: 100%;
    margin: 0px;
}
.css-9iedg7 {
    overflow: hidden;
    text-overflow: ellipsis;
    padding-left: 12px;
    padding-right: 12px;
    white-space: nowrap;
}
.css-blpxq1 .MuiChip-deleteIcon {
    -webkit-tap-highlight-color: transparent;
    color: rgba(255, 255, 255, 0.7);
    font-size: 22px;
    cursor: pointer;
    margin: 0px 5px 0px -6px;
}
.css-blpxq1 {
    position: relative;
    -webkit-tap-highlight-color: transparent;
    margin: 0px;
    user-select: none;
    appearance: none;
    max-width: 100%;
    font-family: proxima-nova, sans-serif;
    font-size: 0.8125rem;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    height: 32px;
    color: rgb(255, 255, 255);
    /* background-color: rgb(3, 169, 244); */
    border-radius: 16px;
    white-space: nowrap;
    /* transition: background-color 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms; */
    cursor: default;
    outline: 0px;
    text-decoration: none;
    border: 0px;
    padding: 0px;
    vertical-align: middle;
    box-sizing: border-box;
}
.css-v3z1wi {
    box-sizing: border-box;
    display: flex;
    flex-flow: row wrap;
    width: 100%;
    -webkit-box-align: center;
    align-items: center;
}
.css-13sljp9 {
    display: inline-flex;
    flex-direction: column;
    position: relative;
    min-width: 0px;
    padding: 0px;
    margin: 0px;
    border: 0px;
    vertical-align: top;
}
.css-k840pm {
    margin: 0px;
    font-family: proxima-nova, sans-serif;
    font-weight: 400;
    font-size: 1rem;
    line-height: 1.5;
    color: rgba(0, 0, 0, 0.6);
}
.css-1ap2e8e {
    font-family: proxima-nova, sans-serif;
    font-weight: 400;
    font-size: 1rem;
    line-height: 1.4375em;
    color: rgb(96, 103, 112);
    box-sizing: border-box;
    cursor: text;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    position: relative;
}
.css-1cccqvr.css-1cccqvr.css-1cccqvr {
    padding-right: 24px;
    min-width: 16px;
}
.css-1cccqvr.MuiSelect-select {
    height: auto;
    min-height: 1.4375em;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}
.css-1cccqvr {
    appearance: none;
    user-select: none;
    border-radius: 0px;
    cursor: pointer;
    font: inherit;
    letter-spacing: inherit;
    color: currentcolor;
    padding: 4px 0px 5px;
    border: 0px;
    box-sizing: content-box;
    background: none;
    /* height: 1.4375em; */
    margin: 0px;
    -webkit-tap-highlight-color: transparent;
    display: block;
    /* min-width: 0px; */
    width: 100%;
    animation-name: mui-auto-fill-cancel;
    animation-duration: 10ms;
}
.css-1w8s6so.Mui-disabled {
    background-color: transparent;
    color: rgba(0, 0, 0, 0.26);
}
.css-1w8s6so.Mui-disabled {
    pointer-events: none;
    cursor: default;
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
    /* background-color: transparent; */
    outline: 0px;
    border: 0px;
    margin: 0px;
    /* cursor: pointer; */
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
.css-1utq5rl {
    user-select: none;
    width: 1em;
    height: 1em;
    display: inline-block;
    fill: currentcolor;
    flex-shrink: 0;
    transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    font-size: 1.5rem;
    position: absolute;
    right: 0px;
    top: calc(50% - 0.5em);
    pointer-events: none;
    color: rgba(0, 0, 0, 0.54);
}
.css-1k3x8v3 {
    bottom: 0px;
    left: 0px;
    position: absolute;
    opacity: 0;
    pointer-events: none;
    width: 100%;
    box-sizing: border-box;
}
.css-1ap2e8e::before {
    border-bottom: 1px solid rgba(0, 0, 0, 0.42);
    left: 0px;
    bottom: 0px;
    content: " ";
    position: absolute;
    right: 0px;
    transition: border-bottom-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    pointer-events: none;
}
.css-39bbo6 {
    margin: 0px;
    flex-shrink: 0;
    border-width: 0px 0px thin;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0.12);
}
.css-1lzq4x8 {
    color: inherit;
    display: table-row;
    vertical-align: middle;
    outline: 0px;
}
.css-1l20mnv {
    font-family: proxima-nova, sans-serif;
    font-weight: 400;
    font-size: 0.875rem;
    line-height: 1.43;
    display: table-cell;
    vertical-align: inherit;
    border-bottom: 1px solid rgb(224, 224, 224);
    text-align: left;
    padding: 16px;
    color: rgb(96, 103, 112);
}
.css-39bbo6 {
    margin: 0px;
    flex-shrink: 0;
    border-width: 0px 0px thin;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0.12);
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
    color: rgb(3, 169, 244);
}
.css-vfeanu {
    font-family: proxima-nova, sans-serif;
    /* font-weight: 500; */
    font-size: 0.875rem;
    line-height: 1.5rem;
    display: table-cell;
    vertical-align: inherit;
    border-bottom: 1px solid rgb(224, 224, 224);
    text-align: left;
    padding: 16px;
    color: rgb(96, 103, 112);
    position: sticky;
    top: 0px;
    /* z-index: 2; */
    /* background-color: rgb(250, 250, 250); */
}
.css-1xnox0e {
    display: table-row-group;
}
.css-1nvf7g0 {
    display: flex;
    height: 0.01em;
    max-height: 2em;
    -webkit-box-align: center;
    align-items: center;
    white-space: nowrap;
    color: rgba(0, 0, 0, 0.54);
    margin-left: 8px;
}
.css-mnn31 {
    font: inherit;
    letter-spacing: inherit;
    color: currentcolor;
    padding: 4px 0px 5px;
    border: 0px;
    box-sizing: content-box;
    background: none;
    height: 1.4375em;
    margin: 0px;
    -webkit-tap-highlight-color: transparent;
    display: block;
    min-width: 0px;
    width: 100%;
    animation-name: mui-auto-fill-cancel;
    animation-duration: 10ms;
}
.css-13sljp9 {
    display: inline-flex;
    flex-direction: column;
    position: relative;
    min-width: 0px;
    padding: 0px;
    margin: 0px;
    border: 0px;
    vertical-align: top;
}
.css-pr0055 {
    font-family: proxima-nova, sans-serif;
    font-weight: 400;
    font-size: 1rem;
    line-height: 1.4375em;
    color: rgb(96, 103, 112);
    box-sizing: border-box;
    cursor: text;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    position: relative;
}
.css-1g2h4b8 {
    color: rgba(0, 0, 0, 0.6);
    font-family: proxima-nova, sans-serif;
    font-weight: 400;
    font-size: 1rem;
    line-height: 1.4375em;
    padding: 0px;
    display: block;
    transform-origin: left top;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: calc(100% - 24px);
    position: absolute;
    left: 0px;
    top: 0px;
    transform: translate(14px, 16px) scale(1);
    transition: color 200ms cubic-bezier(0, 0, 0.2, 1) 0ms, transform 200ms cubic-bezier(0, 0, 0.2, 1) 0ms, max-width 200ms cubic-bezier(0, 0, 0.2, 1) 0ms;
    z-index: 1;
    pointer-events: none;
}
.css-3kdmgz {
    margin: 0px;
    font-family: proxima-nova, sans-serif;
    font-weight: 400;
    font-size: 1.5rem;
    line-height: 1.334;
}
.css-1d3bbye {
    box-sizing: border-box;
    display: flex;
    flex-flow: row wrap;
    width: 100%;
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
..css-s21y5o:hover{
    color:inherit;
    text-decoration:none;
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
.css-16xjay3 {
    background-color: rgb(255, 255, 255);
    color: rgb(96, 103, 112);
    transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    border-radius: 4px;
    box-shadow: rgb(0 0 0 / 20%) 0px 2px 1px -1px, rgb(0 0 0 / 14%) 0px 1px 1px 0px, rgb(0 0 0 / 12%) 0px 1px 3px 0px;
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
.photo-section .user-img{
    width: 150px!important; 
    height: 150px!important;
}
.user-img{
  vertical-align:middle;
  border-style: none;
  object-fit:cover;
}
input[type=number] {
    -moz-appearance: textfield;
}
</style>
@stop
@php

   $paymentConfig = json_decode( json_encode( Helper::getSettings()->payment ) , true);
   $cardObject = array_values(array_filter( $paymentConfig, function ($e) { return $e['name'] == 'card'; }));
   //print_r($cardObject);exit;
   $card = 0;

   $stripe_publishable_key = "";

   if(count($cardObject) > 0) { 
      $card = $cardObject[0]['status'];

      $stripePublishableObject = array_values(array_filter( $cardObject[0]['credentials'], function ($e) { return $e['name'] == 'stripe_publishable_key'; }));


      if(count($stripePublishableObject) > 0) {
            $stripe_publishable_key = $stripePublishableObject[0]['value'];
      }
   }

@endphp
@section('content')
@include('common.user.includes.image-modal')
<section class="z-1 content-box" id="profile-form">
   <div class="profile-section">
      <div class="dis-center col-md-12 p-0 dis-center">
         <ul class="nav nav-tabs " role="tablist">
            <li class="nav-item">
               <a class="nav-link active general" data-toggle="tab" href="#general_info" role="tab" data-toggle="tab">@lang('user.profile.general_information')</a>
            </li>
            <li class="nav-item">
               <a class="nav-link ach" data-toggle="tab" href="#ach" role="tab" data-toggle="tab">Billing</a>
            </li>
            <li class="nav-item">
               <a class="nav-link password" data-toggle="tab" href="#password" role="tab" data-toggle="tab">@lang('user.profile.change_password')</a>
            </li>
          
         </ul>
      </div>
      <div class="clearfix tab-content">
         <div id="toaster" class="toaster">
         </div>
         <div role="tabpanel" class="tab-pane active col-sm-12 col-md-12 col-lg-12 p-0" id="general_info">
            <div class="col-md-12">
               <div class="profile-content">
                  <div class="row m-0">
                     <form class="w-100 validateForm" style= "color:red;">
                        <div class="col-md-12 col-sm-12 pro-form dis-ver-center p-0">
                           <div class="col-md-6 col-sm-12">
                              <h5 class=""><strong>@lang('user.profile.profile_picture')</strong></h5>
                              <div class="photo-section">
                                 <img class = "user-img" height ="200px;" width ="200px;" />
                                 <div class="fileUpload up-btn profile-up-btn">
                                    <input type="file" id="profile_img_upload_btn" name="picture" class="upload" accept="image/x-png, image/jpeg">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-4 col-sm-12 p-1 m-3">
                              
                           </div>
                        </div>
                        <div class="col-md-12 col-sm-12 pro-form dis-ver-center p-0">
                           <div class="col-md-6 col-sm-12">
                              <h5 class=""><strong>@lang('user.profile.first_name')</strong></h5>
                              <input class="form-control" type="text" id ="first_name" name="first_name" placeholder="@lang('user.profile.first_name')">
                           </div>
                           <div class="col-md-6 col-sm-12">
                              <h5 class=" no-padding"><strong>@lang('user.profile.last_name')</strong></h5>
                              <input class="form-control" type="text" id ="last_name" name="last_name" placeholder="@lang('user.profile.last_name')">
                           </div>
                        </div>
                        <div class="col-md-12 pro-form dis-ver-center p-0">
                           <div class="col-md-6 col-sm-12">
                              <h5 class=""><strong>@lang('user.profile.email')</strong></h5>
                              <input class="form-control" type="email" id ="profile_email" name="email" placeholder="@lang('user.profile.email')">
                           </div>
                           <div class="col-md-6 col-sm-12">
                              <h5 class=""><strong>@lang('user.profile.mobile')</strong></h5>
                              <input class="form-control numbers" type="text" id ="mobile" name="phone" placeholder="@lang('user.profile.mobile')">
                              <!-- <input type="hidden" class="mobile_number" value="">
                              <input type="hidden" class="country_code" value=""> 
                              <span> 
                              <i class="fa fa-edit  user_edit" style=" position: absolute; right: 10%; top: 61%;color: #495057;font-size: 18px;cursor: pointer;"></i>
                              </span>
                              <span>
                              <i class="fa fa-check user_update" style=" position: absolute; right: 5%; top: 61%;color: #495057;font-size: 18px;cursor: pointer;"></i>
                              </span> -->
                           </div>
                        </div>
                        <!-- <div class="col-md-12 pro-form dis-ver-center p-0 otp d-none">
                           <div class="col-md-6 col-sm-12">
                              
                           </div>
                           <div class="col-md-6 col-sm-12">
                              <h5 class=""><strong>@lang('user.profile.otp')</strong></h5>
                              <input class="form-control numbers" type="text" id ="otp" placeholder="@lang('user.profile.otp')">
                              <span>
                              <i class="fa fa-check verify_otp" style=" position: absolute; right: 5%; top: 61%;color: #495057;font-size: 18px;cursor: pointer;"></i>
                              </span>
                           </div>
                        </div> -->
                        
                        
                        <button type="submit"  class="btn btn-secondary edit-profile mt-5 save" >@lang('user.save')</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div role="tabpanel" class="tab-pane col-sm-12 col-md-12 col-lg-12 p-0" id="ach">
            <div class="col-md-12">
               <div class="profile-content">
                  @if(Helper::getDemomode() == 1)
                  <div class="alert alert-danger">
                     
                        <p>** Demo Mode : {{ __('admin.demomode') }}</p>
                        <span class="pull-left">(*personal information hidden in demo)</span>
                        
                  </div>
                  @endif
                  <div class="row m-0">
                     <form class="w-100 validateachForm" style= "color:red;">
                        <div class="col-md-12 pro-form p-0">
                           <div class="col-md-6">
                              <h5 class=""><strong>Routing Number</strong></h5>
                              <input class="form-control" type="number" id="routing_no" name="routing_no" placeholder="Routing Number">
                           </div>
                        </div>
                        <div class="col-md-12 pro-form p-0">
                           <div class="col-md-6">
                              <h5 class=""><strong>Account Number</strong></h5>
                              <input class="form-control"  id="account_number" type="number" name="account_number" placeholder="Account Number">
                           </div>
                        </div>
                        <div class="col-md-12 pro-form p-0">
                           <div class="col-md-6">
                              <h5 class=""><strong>Confirm Account Number</strong></h5>
                              <input class="form-control"  id="confirm_account_number" type="number" name="confirm_account_number" placeholder="Confirm Account Number">
                           </div>
                        </div>
                        <button type="submit" class="btn btn-secondary change-pswrd mt-5" >@lang('user.save')</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div role="tabpanel" class="tab-pane col-sm-12 col-md-12 col-lg-12 p-0" id="password">
            <div class="col-md-12">
               <div class="profile-content">
                  @if(Helper::getDemomode() == 1)
                  <div class="alert alert-danger">
                     
                        <p>** Demo Mode : {{ __('admin.demomode') }}</p>
                        <span class="pull-left">(*personal information hidden in demo)</span>
                        
                  </div>
                  @endif
                  <div class="row m-0">
                     <form class="w-100 validatepasswordForm" style= "color:red;">
                        <div class="col-md-12 pro-form p-0">
                           <div class="col-md-6">
                              <h5 class=""><strong>@lang('user.profile.old_password')</strong></h5>
                              <input class="form-control" type="password" name="old_password" placeholder="Old Password">
                           </div>
                        </div>
                        <div class="col-md-12 pro-form p-0">
                           <div class="col-md-6">
                              <h5 class=""><strong>@lang('user.profile.new_password')</strong></h5>
                              <input class="form-control"  id="password1" type="password" name="password" placeholder="Password">
                           </div>
                        </div>
                        <div class="col-md-12 pro-form p-0">
                           <div class="col-md-6">
                              <h5 class=""><strong>@lang('user.profile.confirm_password')</strong></h5>
                              <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
                           </div>
                        </div>
                        <button type="submit" class="btn btn-secondary change-pswrd mt-5" >@lang('user.save')</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
        
   </div>
   </div>
</section>


<!-- Status Modal -->

<div class="modal fade bs-modal-lg confirm-modal" tabindex="-1" role="basic" aria-hidden="true" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">@lang('user.confirm_changes')</h4>
         </div>
         <div class="modal-body p-2">
            <center>@lang('user.are_u_sure')</center>
            </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">@lang('user.close')</button>
            <button type="button" class="btn btn-danger delete-modal-btn">@lang('user.delete')</button>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>

<!-- End Modal -->

@stop
@section('scripts')
@parent
<script type="text/javascript" src="{{ asset('assets/plugins/iscroll/js/scrolloverflow.min.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src = "{{ asset('assets/plugins/cropper/js/cropper.js')}}" > </script> 
<script src = "{{ asset('assets/layout/js/crop.js')}}" > </script> 
<script>
$('.'+'{{$type}}').trigger('click');   
// $('#country').attr('readonly',true);

// $('#country').css('pointer-events','none');
// $('.user_edit').click(function(){
//    $("#mobile").attr('readonly',false);
//    $(".save").attr('disabled',true);
// });

var blobImage = '';
var blobName = '';

$('#profile_img_upload_btn').on('change', function(e) {
      var files = e.target.files;
      if (files && files.length > 0) {
         blobName = files[0].name;
         cropImage($(this), files[0], $('.user-img'), function(data) {
            blobImage = data;
         });
      }
   });


   function openNav() {
      document.getElementById("mySidenav").style.width = "50%";
   }

   function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
   }
   //My profile
   $(document).ready(function()
  {
     basicFunctions();

   var id = "";
   
   //For Stripe Details

   
    

   function isNumberKey(evt)
   {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      if (charCode != 46 && charCode > 31 
      && (charCode < 48 || charCode > 57))
            return false;

      return true;
   }


	 //List the profile details
	 $.ajax({
        type:"GET",
        url: getBaseUrl() + "/user/owner/profile",
        headers: {
            Authorization: "Bearer " + getToken("owner")
        },
        success:function(response){
         var data = parseData(response);
         var result = data.responseData;
         $('#first_name').val(result.first_name);
         $('#last_name').val(result.last_name);
         $('#profile_email').val(result.email);
         $('#mobile').val(result.phone);
         $('.user-img').attr('src',result.picture);
         $('#account_number').val(result.account_number);
         $('#routing_no').val(result.routing_number);
         
        }
    });

   
    //For profile details
     $('.validateForm').validate({
		errorElement: 'span', //default input error message container
		errorClass: 'help-block', // default input error message class
		focusInvalid: false, // do not focus the last invalid input
		rules: {
            first_name: { required: true },
            last_name: { required: true },
            email: { required: true },
            mobile: { required: true },
		},

		messages: {
         first_name: { required: "{{__('auth.firstname_required')}}" },
         last_name: { required: "{{__('auth.lastname_required')}}" },
         mobile: { required: "{{__('auth.mobile_required')}}" },
         email: { required: "{{__('auth.email_required')}}" },

		},
		highlight: function(element)
		{
			$(element).closest('.form-group').addClass('has-error');
		},
		success: function(label) {
			label.closest('.form-group').removeClass('has-error');
			label.remove();
		},
		submitHandler: function(form) {
			var formGroup = $(".validateForm").serialize().split("&");
         var data = new FormData();

         if(blobImage != "") data.append('picture', blobImage, blobName);
         
			for(var i in formGroup) {
				var params = formGroup[i].split("=");
            data.append( decodeURIComponent(params[0]), decodeURIComponent(params[1]) );
         }
         
         $.ajax({
                  url: getBaseUrl() + "/user/owner/profile",
                  type: "post",
                  data: data,
                  processData: false,
                  contentType: false,
                  headers: {
                        Authorization: "Bearer " + getToken('owner')
                  },
                  beforeSend: function (request) {
                        showInlineLoader();
                  },
                  success: function(response, textStatus, jqXHR) {
                        var data = parseData(response);

                        setUserDetails(data.responseData);
                        document.cookie="user_language="+data.responseData.language;
                        alertMessage("Success", data.message, "success");
                        hideInlineLoader();
                     
                        location.reload();
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                        
                        if (jqXHR.status == 401 && getToken(guard) != null) {
                           refreshToken(guard);
                        } else if (jqXHR.status == 401) {
                           window.location.replace("/owner/login");
                        }

                        if (jqXHR.responseJSON) {
                           
                           alertMessage(textStatus, jqXHR.responseJSON.message, "danger");
                        }
                        hideInlineLoader();
                  }
               });
         
		}
    });

     
     $('.validateachForm').validate({
         errorElement: 'span', //default input error message container
         errorClass: 'help-block', // default input error message class
         focusInvalid: false, // do not focus the last invalid input
         rules: {
               routing_no: { required: true },
               account_number: { required:true },
               confirm_account_number:{ required:true, equalTo: "#account_number" }
         },
         messages: {
               old_password: { required: "{{__('user.routing_number_required')}}" },
            account_number: { required: "{{__('user.account_number_required')}}" },
            confirm_account_number: { required: "{{__('user.confirm_account_number_required')}}",equalTo:"{{__('user.confirm_account_number_equalto')}}" },
         },
         highlight: function(element)
         {
            $(element).closest('.form-group').addClass('has-error');
         },
         success: function(label) {
            label.closest('.form-group').removeClass('has-error');
            label.remove();
         },
         submitHandler: function(form) {
            var formGroup = $(".validateachForm").serialize().split("&");
         var data1 = new FormData();
         
            for(var i in formGroup) {
                var params = formGroup[i].split("=");
            data1.append( decodeURIComponent(params[0]), decodeURIComponent(params[1]) );
         }
         
         $.ajax({
                  url: getBaseUrl() + "/user/owner/ach",
                  type: "post",
                  data: data1,
                  processData: false,
                  contentType: false,
                  headers: {
                        Authorization: "Bearer " + getToken('owner')
                  },
                  beforeSend: function (request) {
                        showInlineLoader();
                  },
                  success: function(response, textStatus, jqXHR) {
                        var data = parseData(response);

                        alertMessage("Success", data.message, "success");
                        hideInlineLoader();
                     
                        setTimeout(function(){
                           window.location.replace("ach");
                        }, 1000);
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                        
                        if (jqXHR.status == 401 && getToken(guard) != null) {
                           refreshToken(guard);
                        } else if (jqXHR.status == 401) {
                           window.location.replace("/owner/login");
                        }

                        if (jqXHR.responseJSON) {
                           
                           alertMessage(textStatus, jqXHR.responseJSON.message, "danger");
                        }
                        hideInlineLoader();
                  }
               });
        }
    });

    //Change Password
    $('.validatepasswordForm').validate({
         errorElement: 'span', //default input error message container
         errorClass: 'help-block', // default input error message class
         focusInvalid: false, // do not focus the last invalid input
         rules: {
               old_password: { required: true },
               password: { required:true },
               password_confirmation:{ required:true, equalTo: "#password1" }
         },
         messages: {
               old_password: { required: "{{__('user.old_password_required')}}" },
            password: { required: "{{__('user.password_required')}}" },
            password_confirmation: { required: "{{__('user.password_confirmation_required')}}",equalTo:"{{__('user.password_confirmation_equalto')}}" },
         },
         highlight: function(element)
         {
            $(element).closest('.form-group').addClass('has-error');
         },
         success: function(label) {
            label.closest('.form-group').removeClass('has-error');
            label.remove();
         },
         submitHandler: function(form) {
			var formGroup = $(".validatepasswordForm").serialize().split("&");
         var data1 = new FormData();
         
			for(var i in formGroup) {
				var params = formGroup[i].split("=");
            data1.append( decodeURIComponent(params[0]), decodeURIComponent(params[1]) );
         }
         
         $.ajax({
                  url: getBaseUrl() + "/user/owner/password",
                  type: "post",
                  data: data1,
                  processData: false,
                  contentType: false,
                  headers: {
                        Authorization: "Bearer " + getToken('owner')
                  },
                  beforeSend: function (request) {
                        showInlineLoader();
                  },
                  success: function(response, textStatus, jqXHR) {
                        var data = parseData(response);

                        alertMessage("Success", data.message, "success");
                        hideInlineLoader();
                     
                        setTimeout(function(){
                           window.location.replace("password");
                        }, 1000);
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                        
                        if (jqXHR.status == 401 && getToken(guard) != null) {
                           refreshToken(guard);
                        } else if (jqXHR.status == 401) {
                           window.location.replace("/owner/login");
                        }

                        if (jqXHR.responseJSON) {
                           
                           alertMessage(textStatus, jqXHR.responseJSON.message, "danger");
                        }
                        hideInlineLoader();
                  }
               });
		}
    });


    
	
});

</script>


@stop
