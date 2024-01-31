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
.jss659 {
    display: flex;
    overflow-x: auto;
    margin-bottom: 16px;
    flex-direction: row;
    padding-bottom: 16px;
    justify-content: space-between;
}
.jss606 {
    padding: 16px 0px;
}
.jss608 {
    padding: 0px 16px;
}
.jss613 {
    color: #000;
    display: flex;
    flex-grow: 1;
    align-items: center;
}
.jss625 {
    display: flex;
    min-width: 210px;
}
.jss627 {
    z-index: 100;
    font-weight: 700;
}
.jss628 {
    cursor: pointer;
}
.jss629 {
    overflow: auto;
    position: relative;
}
.jss632 {
    cursor: pointer;
}
.jss660 {
    width: 100%;
    border: 1px solid #E5E5E5;
    padding: 20px 20px 10px 20px;
}
.jss665 {
    color: black;
    margin-bottom: 8px;
}
.jss666 {
    font-size: 10px;
    line-height: 12px;
    margin-bottom: 8px;
    letter-spacing: 1.5px;
}
.jss667 {
    font-size: 14px;
    line-height: 21px;
    letter-spacing: 0.25px;
}
.jss668 {
    color: #9E9E9E;
    position: absolute;
}
.jss669 {
    display: flex;
    position: relative;
    align-items: flex-end;
    flex-direction: column;
}
.jss670 {
    text-decoration: none;
}
.jss671 {
    font-size: 14px;
    margin-top: 24px;
    font-weight: 500;
    letter-spacing: 1px;
}
.jss674 {
    cursor: auto;
    display: flex;
    align-items: center;
    justify-content: flex-start;
}
.jss676 {
    margin-right: 4px;
}
.jss677 {
    color: #9e9e9e;
}
.jss678 {
    color: #388E3C;
    background: #ECF9F3;
}
.jss681 {
    border: 1px solid #E5E5E5;
}
.jss686 {
    background: rgb(255, 255, 255);
}
.jss687 {
    max-height: none;
    min-height: 510px;
}
.jss730 {
    white-space: nowrap;
}
.jss731 {
    background: rgb(255, 255, 255);
}
.MuiButtonBase-root .jss144 h1 {
    color: #fff;
}

label + .css-pr0055 {
    margin-top: 16px;
}
.css-1lzq4x8 {
    color: inherit;
    display: table-row;
    vertical-align: middle;
    outline: 0px;
}
.css-1rt0c65 {
    font-family: proxima-nova, sans-serif;
    /* font-weight: 500; */
    font-size: 0.875rem;
    line-height: 1.5rem;
    display: table-cell;
    vertical-align: inherit;
    border-bottom: 1px solid rgb(224, 224, 224);
    text-align: right;
    padding: 16px;
    color: rgb(96, 103, 112);
    flex-direction: row-reverse;
    position: sticky;
    top: 0px;
    /* z-index: 2; */
    /* background-color: rgb(250, 250, 250); */
}
.css-1k1yj43 {
    max-width: 100%;
    font-family: proxima-nova, sans-serif;
    font-size: 0.8125rem;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    height: 32px;
    /* color: rgb(96, 103, 112); */
    /* background-color: rgba(0, 0, 0, 0.08); */
    border-radius: 16px;
    white-space: nowrap;
    transition: background-color 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    cursor: default;
    outline: 0px;
    text-decoration: none;
    border: 0px;
    padding: 0px;
    vertical-align: middle;
    box-sizing: border-box;
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
.css-1d3bbye {
    box-sizing: border-box;
    display: flex;
    flex-flow: row wrap;
    width: 100%;
}
.css-3kdmgz {
    margin: 0px;
    font-family: proxima-nova, sans-serif;
    font-weight: 400;
    font-size: 1.5rem;
    line-height: 1.334;
}
.css-13sljp9 {
    /* display: inline-flex; */
    flex-direction: column;
    position: relative;
    /* min-width: 0px; */
    padding: 0px;
    margin: 0px;
    border: 0px;
    vertical-align: top;
}
.css-qiwgdb.css-qiwgdb.css-qiwgdb {
    padding-right: 32px;
}
.css-qiwgdb.MuiSelect-select {
    height: auto;
    min-height: 1.4375em;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}
.css-39bbo6 {
    margin: 0px;
    flex-shrink: 0;
    border-width: 0px 0px thin;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0.12);
}
.css-aub7os {
    font-family: proxima-nova, sans-serif;
    font-weight: 400;
    font-size: 0.875rem;
    line-height: 1.43;
    display: table-cell;
    vertical-align: inherit;
    border-bottom: 1px solid rgb(224, 224, 224);
    text-align: right;
    padding: 16px;
    color: rgb(96, 103, 112);
    flex-direction: row-reverse;
}
.css-igs3ac {
    text-align: left;
    position: absolute;
    inset: -5px 0px 0px;
    margin: 0px;
    padding: 0px 8px;
    pointer-events: none;
    border-radius: inherit;
    border-style: solid;
    border-width: 1px;
    overflow: hidden;
    min-width: 0%;
    border-color: rgba(0, 0, 0, 0.23);
}
.css-hdw1oc {
    float: unset;
    overflow: hidden;
    padding: 0px;
    line-height: 11px;
    transition: width 150ms cubic-bezier(0, 0, 0.2, 1) 0ms;
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
.css-cly2df {
    display: table;
    width: 100%;
    border-collapse: separate;
    border-spacing: 0px;
}
.css-1636szt {
    user-select: none;
    width: 1em;
    height: 1em;
    display: inline-block;
    fill: currentcolor;
    flex-shrink: 0;
    transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    font-size: 1.5rem;
    position: absolute;
    right: 7px;
    top: calc(50% - 0.5em);
    pointer-events: none;
    color: rgba(0, 0, 0, 0.54);
}
.css-qiwgdb {
    appearance: none;
    user-select: none;
    border-radius: 4px;
    cursor: pointer;
    font: inherit;
    letter-spacing: inherit;
    color: currentcolor;
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
    padding: 16.5px 14px;
}
.css-2istl4 {
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
    border-radius: 4px;
}
.css-1csqzc2 {
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
    max-width: calc(133% - 24px);
    position: absolute;
    left: 0px;
    top: 0px;
    transform: translate(14px, -9px) scale(0.75);
    transition: color 200ms cubic-bezier(0, 0, 0.2, 1) 0ms, transform 200ms cubic-bezier(0, 0, 0.2, 1) 0ms, max-width 200ms cubic-bezier(0, 0, 0.2, 1) 0ms;
    z-index: 1;
    pointer-events: auto;
    user-select: none;
}
.css-r7xv23 {
    margin: 0px;
    font-family: proxima-nova, sans-serif;
    /* font-weight: 400; */
    font-size: 1rem;
    line-height: 1.5;
    color: #F26821;
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
.css-1rvbkn {
    background-color: rgb(255, 255, 255);
    color: rgb(96, 103, 112);
    transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    border-radius: 4px;
    box-shadow: none;
}
.css-rfnosa {
    box-sizing: border-box;
    /* flex-direction: row; */
}
.css-k589ii {
    margin: 0px;
    font-family: proxima-nova, sans-serif;
    font-weight: 400;
    font-size: 2.125rem;
    line-height: 1.235;
    text-align: left;
}
.css-1ntzrq3 {
    margin: 0px;
    font-family: proxima-nova, sans-serif;
    font-weight: 500;
    font-size: 0.875rem;
    line-height: 1.57;
    text-align: left;
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
.css-1xnox0e p{
    margin-left:30px;
}
    </style>

@stop
@section('content')
<div class="jss131"><div class="jss130"></div><div class="MuiContainer-root MuiContainer-maxWidthLg MuiContainer-fixed jss159 css-x3h831">
                                            
<div class="MuiGrid-root jss659 css-rfnosa"><div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation0 jss660 jss661 css-1rvbkn"><div class="jss669"></div><div class="MuiTypography-root MuiTypography-subtitle2 MuiTypography-alignLeft jss666 css-1ntzrq3">ESTIMATED NEXT PAYOUT</div><h4 class="MuiTypography-root MuiTypography-h4 MuiTypography-alignLeft jss665 css-k589ii">$<span class="weekly"></span></h4><!--<div class="MuiTypography-root MuiTypography-subtitle2 MuiTypography-alignLeft jss667 css-1ntzrq3">Within 3-7 business days</div>--><!--<div class="MuiGrid-root css-rfnosa"><a class="jss670" href="listing-panel-finance-cont.html"><p class="MuiTypography-root MuiTypography-body1 jss671 css-r7xv23">RECENT TRANSACTIONS</p></a></div>--></div><div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation0 jss660 jss662 css-1rvbkn"><div class="MuiTypography-root MuiTypography-subtitle2 MuiTypography-alignLeft jss666 css-1ntzrq3">PREVIOUS PAYOUT</div><h4 class="MuiTypography-root MuiTypography-h4 MuiTypography-alignLeft jss665 css-k589ii">$<span class="last"></span></h4><!--<div class="MuiTypography-root MuiTypography-subtitle2 MuiTypography-alignLeft jss667 css-1ntzrq3">Mar 12, 2023</div>-->
<!--<div class="MuiGrid-root css-rfnosa"><a class="jss670" href="{{url('/')}}/"><p class="MuiTypography-root MuiTypography-body1 jss671 css-r7xv23">VIEW PAYOUT DETAILS</p></a></div>-->
</div><div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation0 jss660 jss663 css-1rvbkn"><div class="MuiTypography-root MuiTypography-subtitle2 MuiTypography-alignLeft jss666 css-1ntzrq3">MTD NET EARNINGS</div><h4 class="MuiTypography-root MuiTypography-h4 MuiTypography-alignLeft jss665 css-k589ii">$<span class="monthly"></span></h4><!--<div class="MuiTypography-root MuiTypography-subtitle2 MuiTypography-alignLeft jss667 css-1ntzrq3">Mar 1 - Mar 17, 2023</div>--></div><div class="jss664"></div></div>

<div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation0 jss681 css-1rvbkn"><div class="MuiGrid-root MuiGrid-container jss606 css-1d3bbye"><div class="MuiGrid-root MuiGrid-container jss608 css-8rnkcc"><h1 class="MuiTypography-root MuiTypography-h5 jss613 css-3kdmgz">Payouts</h1></div></div><hr class="MuiDivider-root MuiDivider-fullWidth css-39bbo6"><div class="jss629 jss687" id="table-wrapper"><table class="MuiTable-root MuiTable-stickyHeader css-cly2df"><thead class="MuiTableHead-root css-1wbz3t9"><tr class="MuiTableRow-root MuiTableRow-head css-1lzq4x8"><th class="MuiTableCell-root MuiTableCell-head MuiTableCell-stickyHeader MuiTableCell-sizeMedium jss627 jss686 css-vfeanu" scope="col">Available On</th><th class="MuiTableCell-root MuiTableCell-head MuiTableCell-stickyHeader MuiTableCell-sizeMedium jss627 jss686 jss628 css-vfeanu" scope="col"><div class="jss674"><span class="jss676">Status</span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium jss677 css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="HelpOutlineIcon"><path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"></path></svg></div></th><th class="MuiTableCell-root MuiTableCell-head MuiTableCell-stickyHeader MuiTableCell-sizeMedium jss627 jss686 css-vfeanu" scope="col" style="width: 65%;">Bank Account</th><th class="MuiTableCell-root MuiTableCell-head MuiTableCell-stickyHeader MuiTableCell-alignRight MuiTableCell-sizeMedium jss627 jss686 css-1rt0c65" scope="col">Net Earnings</th></tr></thead>

<tbody class="MuiTableBody-root css-1xnox0e">

  
</tbody>
</table></div></div>


                                                
                                                </div></div></div></div>
@stop
@section('scripts')
@parent
<script>

 var url = getBaseUrl() + "/user/transport/payment-list";
    $.ajax({
    type:"GET",
    url: url,
    headers: {
        Authorization: "Bearer " + getToken("owner")
    },
    'beforeSend': function (request) {
        showLoader();
    },
    success:function(data){
            var payment=data.responseData.payments;
            var paymentList='';

            var thrice = data.responseData.thrice;
            var last = data.responseData.last;
            var monthly = data.responseData.monthly;
            var admincharges = data.responseData.admincharges;

            $('.weekly').text(thrice);
            $('.last').text(last);
            $('.monthly').text(monthly);

            
            payment.forEach(function(item, index){
               
                amount= item.rent_amount;

                if(item.status==4){
                    amount = admincharges.cancellation_fee;
                }

               var status='';
               if(item.is_paid==1){
                status='paid';
               }
               
                paymentList+='<tr class="MuiTableRow-root jss632 jss633 css-1lzq4x8"><td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1l20mnv">'+item.paid_on_date+'</td><td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1l20mnv"><div class="MuiChip-root MuiChip-filled MuiChip-sizeMedium MuiChip-colorDefault MuiChip-filledDefault jss678 css-1k1yj43"><span class="MuiChip-label MuiChip-labelMedium css-9iedg7">'+status+'</span></div></td><td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1l20mnv">Bank Of America</td><td class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignRight MuiTableCell-sizeMedium css-aub7os"><div class="jss685"><span>$'+amount+'</span></div></td></tr>';
            });

            $('.css-1lzq4x8').css('display', 'table-row');
            if(payment.length==0){
                 $('.css-1lzq4x8').css('display', 'none');
                paymentList='<p>No Result Found.</p>';
            }
            $('.MuiTableBody-root').html(paymentList);

             hideLoader();
        }
    });
</script>
@stop