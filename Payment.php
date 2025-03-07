<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
  @import "susy";
/*basic menu */

$colour--link: #5c5c5c;
$colour--border: #c5c5c5;
html {
    box-sizing: border-box;
}
*,
*:before,
*:after {
    box-sizing: inherit;
}
h1,
h2,
h3,
h4,
h5,
h6,
ul,
li {
    padding: 0;
    margin: 0;
}
label {
    display: block;
    font-weight: bold;
    font-size: 12px;
}
input[type="text"],
select {
    border-radius: 3px;
    border: 1px solid $colour--border;
    padding: 5px;
    width: 100%;
}
.form-row {
    padding: 0 0 10px;
    display: block;
    clear: both;
    float: left;
    width: 100%;
}
/*bases pup up */

.mod-overlay {
    background-color: rgba(0, 0, 0, 0.5);
    height: 100%;
    left: 0;
    overflow-y: scroll;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 9999;
}
.mod-popup-center {
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
.mod-popup-container {
    background-color: #f9f9f9;
    border-radius: 3px;
    color: #5c5c5c;
    font-family: Arial;
    font-size: 14px;
    left: 50%;
    position: absolute;
    top: 2%;
    transform: translate(-50%, 0px);
    transition: all 0.3s ease 0s;
    width: 90%;
}
.mod-popup-container {
    width: 850px;
}
.mod-popup-header {
    background-color: #dedede;
    border-bottom: 1px solid #c5c5c5;
    border-radius: 3px 3px 0 0;
    box-sizing: content-box;
    position: relative;
}
.mod-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}
.mod-popup-header .mod-row.mod-column-double .mod-column {
    flex: 1 0 calc(50% - 40px);
}
.mod-column-double .mod-column:first-child {
    padding-right: 15px;
}
.mod-column-double .mod-column {
    flex: 1 0 calc(50% - 15px);
}
.mod-column-double .mod-column {
    align-self: auto;
    flex: 1 0 100%;
    order: 0;
}
.mod-popup-header h3,
.mod-popup-header h4 {
    line-height: 1.6;
    margin: 0;
    padding: 7px 15px;
    font-size: 1.17em;
}
.mod-popup-header .mod-row.mod-column-double .mod-column:last-of-type {
    padding-right: 40px;
    text-align: right;
}
.mod-popup-header .mod-row.mod-column-double .mod-column {
    flex: 1 0 calc(50% - 40px);
}
.mod-popup-header .mod-popup-close::before {
    transform: rotate(45deg);
}
.mod-popup-header .mod-popup-close::before,
.mod-popup-header .mod-popup-close::after {
    background-color: #5c5c5c;
    content: "";
    height: 22px;
    left: 50%;
    margin-left: -1px;
    margin-top: -11px;
    position: absolute;
    top: 50%;
    width: 2px;
}
.mod-popup-header .mod-popup-close::after {
    transform: rotate(-45deg);
}
.mod-popup-header .mod-popup-close::before,
.mod-popup-header .mod-popup-close::after {
    background-color: #5c5c5c;
    content: "";
    height: 22px;
    left: 50%;
    margin-left: -1px;
    margin-top: -11px;
    position: absolute;
    top: 50%;
    width: 2px;
}
.mod-popup-header .mod-popup-close {
    border-bottom: 0 none;
    border-radius: 0 3px 0 0;
}
.mod-popup-header .mod-popup-close {
    background-color: #ebebeb;
    border-bottom: 1px solid #c5c5c5;
    border-left: 1px solid #c5c5c5;
    border-radius: 0 3px;
    display: block;
    height: 40px;
    position: absolute;
    right: 0;
    top: 0;
    transition: background-color 0.2s ease 0s;
    width: 39px;
}
.btn,
.popup-generic .btn {
    background-clip: padding-box;
    background-color: #fcaf17;
    border: 1px solid #9f9f9f;
    color: #444444;
    cursor: pointer;
    display: inline-block;
    font-weight: bold;
    height: 36px;
    line-height: 36px;
    padding: 0 10px;
    position: relative;
    text-align: center;
    text-decoration: none;
    transition: all 0.1s ease-in 0s;
    width: auto;
    border-radius: 4px;
  &.edit{
    background:url("data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMDAwMDAwIiBoZWlnaHQ9IjE4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwYXRoIGQ9Ik0zIDE3LjI1VjIxaDMuNzVMMTcuODEgOS45NGwtMy43NS0zLjc1TDMgMTcuMjV6TTIwLjcxIDcuMDRjLjM5LS4zOS4zOS0xLjAyIDAtMS40MWwtMi4zNC0yLjM0Yy0uMzktLjM5LTEuMDItLjM5LTEuNDEgMGwtMS44MyAxLjgzIDMuNzUgMy43NSAxLjgzLTEuODN6Ii8+CiAgICA8cGF0aCBkPSJNMCAwaDI0djI0SDB6IiBmaWxsPSJub25lIi8+Cjwvc3ZnPg==") no-repeat center center;
    text-indent:-999em;
    padding:0;
    border:0;
    width:14px;
  }
}
.btn[disabled] {
    background: #ececec;
}
.mod-popup-inner-content,
.mod-popup-footer {
    padding: 15px;
    clear: both;
}
.mod-column-single .mod-column {
    align-self: auto;
    flex: 0 0 100%;
    order: 0;
}
/*bases pup up END*/

.mod-popup-hor-nav {
    padding: 0;
    margin: 0;
    background: #ececec;
    border-bottom: 1px solid $colour--border;
    overflow: hidden;
    li {
        list-style: none;
        display: block;
        float: left;
        &:first-child {
            border-left: 1px solid tranparent;
        }
    }
    a {
        border-left: 1px solid $colour--border;
        color: $colour--link;
        text-decoration: none;
        padding: 12px 15px;
        display: block;
        font-weight: bold;
        &:hover, &.active {
            color: #f6b201;
            /*yellow*/
            
            background: #56514c;
        }
    }
}
/*basic menu END*/
/*mod-card*/

.mod-popup-inner-title {
    padding: 0;
    margin: 0 0 10px;
}
.mod-card {
    overflow: hidden;
    .column {
        display: block;
        float: left;
        border: 1px solid #c5c5c5;
        background-color: rgb(236, 236, 236);
        box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.2);
        &.column1 {
            width: 40%;
        }
        &.column2 {
            width: 60%;
        }
    }
    .title {
        height: 40px;
        line-height: 40px;
        border-bottom: 1px solid $colour--border;
        h5 {
            display: inline-block;
            padding: 0 12px;
            color: #000;
        }
        .last {
            float: right;
        }
    }
}
.icon-add {
    width: 100%;
    border: 1px dashed #f9b300;
    background: #ffeec4;
    color: #56514c;
    font-weight: bold;
    height: 52px;
    padding-left: 32px;
  &.active{
    background: #ececec;
    border-bottom-color: $colour--border;
    border-right: 1px dashed rgba(0, 0, 0, 0);
    border-top-color: $colour--border;
    position: relative;
    width: calc(100% + 2px);
    z-index: 1;
  }
    &:before {
        background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAADI0lEQVRIiY3WXYhVVRQH8N/cOalHpjOmUQQTBpE5pdlLhuY0Qd9oZhJFPQU96FPkm/TxZGRRURKCVK/Rk9EXUT1Uw5Qx0oM6kJpIEUP0MaN4De9QF6aHvW73dDn3Xhcc9tda///aa++91hl45KEt+sgqbMM9uAErYn4OP+ALfIAfe4FkPdbGsQdjXdaviu9OvIxJPI+JKuVaxdwSHMBXQXIW+7EVK7EYBUZjbn/ojIXNgcD4nwx0hG45PsEGzONFvI6/uuyqJUPYhWeC5DtswZmqHS3Fp0HyM26VQtePROjswfqw3RBYS6uI9gX4jBSGY1WIWV4MZ3mxsgvhdNjOBNa+TqJxPCmF6+FQrCLZhm/wcZYXN3chmwmM+cAcLxO9gAG8gakuADArXYK12NlDbyp2MxDYaliHTdLNeamHMQzGB6f66O4NzE1YV8P2WPgI5/oYl8+00Uf3HN6L/vaa9oP8sKyV5cVglheXZHmRZ3nRetizWIj+aOhdmuVF3oXss2hvz7A6Bt93KO0MJ+7C4SwvCjSluMMTWV6slq72oiwvTuF0s1F/s4RxJNrrM+3c9XsH0Z94NPr3V3g7FE6U5dWOcQtzRTnXLcbfpfGX+Ck8HsSIlBtbj/CCFMorcFqKzLcVDhGGc9oJ8nxrodmoz2Z5sRGL8Kv06jPtpPkKXsMwcumGzXXgXxntXIYTQbJGR6pvNuq/lYaHsry4TjqnDNc2G/XzZecqpPWoT9ak9A4P9DBoSaZdWs70Ugy5L9rJGt6PwVYpDL1kqNSf7qM7jMeif7CGo1L+Wo7dfYyP4A9pN2f76O7GZYF9tPXSn5Me4tPSoVdKs1H/B7fgDu1IVMn6wFqQqu5/KWUCb0tF66B0lbuR/dJs1KebjfpCF5WRwFgSmF+XiUgVcioUJ3FTD4+7ydqwHQmsXa2FMtEFbA6Fa6Ldi2UXQbBMKvuHS7abAxMM3ji6qmzQwLu4XKqQY9iBq8Op+TBuZYoxPIV3cHfMv4XHUS8Dd/6clGU8vNx4ETuCQ3hWnEmn9Pqvm8BtUg57EPdKpaH8A3kcn0sl5kQvL/4FcAy4V+WnMq4AAAAASUVORK5CYII=") no-repeat scroll 0 0;
        position: absolute;
        content: '';
        width: 26px;
        height: 26px;
        margin: -5px 0 0 -32px;
    }
}
.btn.icon-delete{
  background-color:#d8d9da;
  &:before{
    
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAQCAYAAADNo/U5AAAAdklEQVQokeWNMQ6DQAwEx9dSpaFKwWP22fsLPhFootQpoAiRLgTJR9qMZK1k7dhBhaQAbkBfrWfgavv5XpRasr1swgBctumBru6FpGl3OWMuJwV+6L8IAElLq2A7Sl77Zi8NSR5KjyQPpSb+Qbon+SGNjU9GgBUluBpPVILjPAAAAABJRU5ErkJggg==") no-repeat scroll 0 center;
    content: "";
    padding-left: 18px;

  }
}
/*mod-card END*/
/*Mod block*/

.mod-list-block {
     max-height: 200px;
    overflow-x: hidden;
    overflow-y: auto;
    li {
        list-style: none;
        background: #f9f9f9;
        border-top: 1px solid $colour--border;
        display: block;
        min-height: 24px;
        padding: 15px 10px;
        overflow: hidden;
        cursor:pointer;
        &:first-child {
            border-top: 1px solid transparent;
        }
        &.active {
            background: #ececec none repeat scroll 0 0;
            position: relative;
            width: calc(100% + 2px);
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.4) inset;
        }
        span {
            font-size: 12px;
        }
        input {
            position: relative;
            top: 5px;
            margin-right: 5px;
        }
      small{
        display:block;
      }
        .col1 {
            @include span(3 of 12);
        }
        .col2 {
            @include span(5 of 12);
        }
        .col3 {
            @include span(1 of 12);
        }
        .col4 {
            @include span(3 of 12 last);
            text-align: right;
        }
        .icon-visa {
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAWCAYAAABOm/V6AAACS0lEQVRIie2WO2yPYRTGf/27lDTaQQdDmw4upSkWg0eauCY6WISFgUTcGhLikqYbg8TAhmhCXEIMFiJUXJJKwyOl6KAaW6NKBwRt0kiU4Ttf+uVPWlP/hp7lOZfvPe/zveec9/uKJO0BTgDTGH8ZAg4VSRoASgpAIJXBXIEJAJTkCkwAgAkSqUzO6K1AGzAc9nJgRSZ+FugHlgKVwHVgKtAU8Q/AZaATmALUAofz8j8KfT9QlgaKJP3KPNgDNNhukVQBvAt/H1Bpe1jSQ6DT9gFJi2LTJ0C97e9pIkmzghjAV6DC9kDE7gJr02fzy1EFHASw3RtvDnAlCMwBVgGvw18duM/2d0nrJD2T9Bg4mcl70faApElhP89u+reeqJOUXlwdgZcCGwK7A2sCewJ/ALOBZcDmTM4zgTsC28ciURxJAF4AHba7JBUDW8P/JnBBNrnte8Bc4EIm3wPbbyXVALv+lQTA6sCXjJzCRmAm0G/7cx6JY5KaJZXb/mR7G3A1YqcDtwALJU23/RF4PxaJNYFPgWuh7w7sBoj6VmfW7AS6Jc0P+yZJY98Kuw3YTjJRkDmN7IhmZYmkMtt9sWENUBexrsAqktKdAspJyvAF+BbxeUCz7Z8Atm/n7dEOrB+NRA5YCdwIuyETS5uyNvC87VfZxTG6e4HFYR8H6iPcYruJkab/457Iyn3gTuhHGLlczpGMaB2wIYi2ktwJM8K/iaQUaT8cBUpD7yUZ39Lwj0pi3OS/+HZMkEglBwwWmMNgDmgk+eEshAwBjb8BKOiyem8EKysAAAAASUVORK5CYII=") no-repeat 0 0;
            display: inline-block;
            text-indent: -999em;
            width: 33px;
            height: 22px;
        }
        .icon-amex {
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAWCAYAAABKbiVHAAAEzklEQVRIic2WX0hTbRzHP9s57mxim4plfzZtjhnViKgM1x+FCi+0qxAmWkFEUJkXpXQV3QtvspA3woi6qOhUkMIYNYMogkMjBlnQhU6QTg2Xpz8unDubZ++FtYqwt5v3te/d83v+fZ7v8/ye5zH5/f5O4C/AyuJoFuhRFOVv8yKD8GXuPmCpeZFBvsoCOM2LTfGdzGJRURE9PT0IgsDnz58pKSkBIJ/P09/fT2dnJ4Ig/HIUwzBIpVI4HA4AVFVl5cqVmM3f1vr92O/fv6e8vByASCRCNBqdp2lqakKSJO7evcu6devw+XzIsoxhGJw7dw6bzYYsy9TU1BAKhQiHw4TDYVatWoUsy8iyzNDQEC6Xi7GxMXw+HzabjXA4TDqdZmRkhHv37rFv3z50XefOnTs0NTVht9vRdR232/3Nmra2Nq5fv05rays3btxA13VKSkq4efMma9asQZZlKioqSKfTvHnzhkAgQCAQwOFwkMvl6O3tZffu3USjUd6+fUs8HufBgwf09/dTV1fH69evWb16NcPDw2iaRnl5OcFgkOnpaTRN+3GfPnz4wNTUFK9evUJRFBKJBEuWLKGuro7e3l48Hk/BUsMwSCQSJBIJ5ubm0DSNy5cvE4lE2LBhAwAzMzOUlZUhCAK3b9/GMAzevXuHLMsA7Nq1i0wmw5MnT34+NLIsc/LkSfbu3UtHR0ehUyAQ4P79+7S3txcaz83NEYvFiMVifPr0icrKSo4ePcqJEyd4+vQpAB6PB7PZzLFjx1AUhVOnTnH48GFsNhuxWAyA7u5uFEX5CcY0OjqaT6VSnD59mkuXLpHL5RAEAcMwMJlMGIaBKIoUFRWRTqcLHa1WK7quMzk5SVVVFdlslnw+jyRJJBIJKioqMAyD4eFhRkdH6erqQtd1JElCVVWWL1+OIAhcu3aNUCiEoihbTH6/P//LVPmfpCjKFnGhyvXr13P27FkymUwhZrFYkGWZlpYWLBbLD/F8Pk82mwXmXZuenqa4uJhcLldoMzMzg9VqJZfLYbPZ+PjxI5IkAeD1elkQRpIkXrx4wZUrV/B4PAAkk0n6+vq4cOECmqYxPj5ObW0tExMTnDlzhuPHj7Nt2zaSySRbt25F0zRUVcXhcLBnzx4ePXrE5OQkFouFgwcPcv78eZxOJyaTCYB/vYFLS0vxer20tLRw5MgROjo6sNvt7N+/H7fbTVtbG263m3g8jiiKNDQ0sHnzZmZnZwFwOp14vV5WrFhBPB5n48aNNDY2UlZWRiaTweVy0dDQ8HswTqeTxsZGamtref78OVVVVYyPj5PNZtE0jVgsRn19Pc3NzVit889cOp2muLi4YP+mTZtYtmwZAwMDbN++nWfPnvHy5UsuXryI3+9nYGAAYOFtArDb7aiqSjAYBMDlchEMBhkcHCQUCrFz5058Ph+3bt1ix44drF27Fq/Xi8/nY3BwkMrKSh4+fMjjx49pbm5mZGQEVVURRZGamhq6u7sRBIH6+nqGhoZYMJuqq6s5cODADzHDMLh69Sqtra3Y7XYAotEokUiErq4uHA4HExMTVFdX/9LtqakpSktLEcV5L5LJJIcOHfqzUvtP+kJgZv7bt9jSYR6m52thsUBSqVQQMExfAksBJ7+R6v+RDED9B8GU8Hk+ZKPEAAAAAElFTkSuQmCC") no-repeat 0 0;
            display: inline-block;
            text-indent: -999em;
            width: 35px;
            height: 22px;
        }
        .icon-status1 {
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAZCAYAAAC7OJeSAAACZ0lEQVRIicWXPW/TQBjHf47tuE7dlCQdwkskXkSkqvkCSBUfANJCGUKF6ACIETohITZAXcpCYUQMiAG6IBUKYmLiI7AgUClKUbq0VJQq5KU1w52rSzBparvwSI/8f87P3f1s+Z47a6WxYhy4B1wE0vx7+w48BW7EgGkgDxQA7T/4kJz/jgFMSJDK3j18R6sAl4EPBpAuL68EBsllM6FIyssrAJVcNpM2ZJsbcrBIzNg5ZfdmW3F6LBMrbmLoMQCam1vU6g2qtQa/avW9h7GtOPuSvdsAqpmGjmnoOIkemptbrP3YoNoG9WevgNbvJBhI9fmCtJuhxxhI9dHvJHxhQi3PXDYzlXRsddwycBOxSm3pBeAWsOQlJR2bXDZzV46DVhorul4Q0EaBOSWeBa4AG3/Jd4DHQElpOwPMRfHNzCj6OXCBzqvzJzAutQd0H8J/M6PAYamXgKs7gHjmIt7eNxkfiQLmlKIfIJ6aalNzvWsHXwceqoOFhRlW9BsVBMA2XM1zvxh4HSXMUUUveBO2J1Wbmqu2K8ALUcKYim74JbSDQAtwS9ULC/NJ0cf9QLxru8uUfJQw7xVd9ITfN+LnwEiUMPOKvo4oaN2aA1yLEuYlsCj1IeAR3VVzDVGFD8r4iwezCuwPATSp6HHgGdDbId9BVGp1O7gNrOpDg/kDwCXgHbJo7dI+IlbVSRkXEEdZC1gD1uX9QUTVfQKcUPrPyL5vNeXvYAJIBYAJay1/B3XEq04T/qR/FvjaBcAiYqfW5LyTQF1z3cDHXwDOnxvxaz6NWOrDwDHZ9hlRCuaRWwfA7ItX251+AwaPvnPxpsDyAAAAAElFTkSuQmCC") no-repeat 0 0;
            display: inline-block;
            width: 35px;
            height: 25px;
        }
        .icon-status2 {
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAXCAYAAACBMvbiAAAA50lEQVRIie3WIU8DMRTA8V8vDcnszRwJsxj4KBgMCgzfARwGCV9hKL4RISgcYhiGnFlyiOuRy4WbYusC+ydN+17F+7evouHs9GQP9zhHafN84hFXBe5wiGOEDOMo1b+NuEgis/UdfiUzXOI5onx7/8gl8i00qcZlTEGdVSVR5BbospMZon0zIatFQx1hUo1zi2DL2rSTGeLvyyyWoR6a+7kusZ/4DUaxDotlqEexDj/F3XWX/9Gm9jb6cX+vy9ratGrur1u2rk1z7Gf2qDAvNJ/haUrk4AAPmBa4xiteND++TY+nVP/mC41ccJxDUb/9AAAAAElFTkSuQmCC") no-repeat 0 0;
            display: inline-block;
            width: 35px;
            height: 25px;
        }
        .icon-status3 {
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAZCAYAAAC7OJeSAAACY0lEQVRIie2XT0iTcRjHP++79/XdYthcHiToFMHAQCLSusigTi0yomMtaAsmDP8wpYt50CAsx4LsNFdgp042yYjIGhUlXeyWFpLgxcApuGx7fZlvB+fa67YMe3Ed+sILv+f7PO/7+/B7fjzwChO2hirgNnARcLL7WgYeAt0ScKvm1Im2Q0PXqaqr3XWStYXFmi/B/rblF+/TwoStIdk4/dRZCZACID64Ti+JQEVBgM2OOCUAt9tdURiAG4BYaYhC/YcpJwkgkUhUGAPeOhrNO5n1T19Je9rRYvFta7VYnLSnnfXpOYMvmQLycYa0pwM9tUr2zRTIErLXUxpkZBy1MwxA+mQrticRxCMuwKQ7k/H3o6dW87EaHEB7MFYMcn8MNTiQj/XUKpnWm/nYFBg5cKHIU9sH0aKjv0Cio6gdg8XvXj2fX5vSJtl/DkSxaDM1FEHYa8+vt0q504V85ay5MMDGRyWLoQ2w0cJSUoauFd0rU+eM7PWgRELb1imRUMkLbvrQk30tWGO9ZfPWWC+yr6Vk7p+awKbDaLE4GV9f2XzG11d2MJoKUzjQfie1M4w2Ml4SZmltYfHvQbYMtE1Zoz1Yoz3FQAWDce1bEmDJclmu2//j89xxR/MxLPY9OwMZflzyRJRwJ7L3DOLhgwi1DrLPJw357LN3ZKskZqOPyMzO3xUK/g4uATU7gXGtK1gRDN68oJEUsgZvn27hgC4bvDR6dkZU7wHdgqqqO9nfoO/VzUeBl0B1zvLbV17HytT6gOFcuAK4nZnJKQB0XTflSSpN9Uml6VVSaQr8QW0gV1tf6P8EMX8lR1jTfGIAAAAASUVORK5CYII=") no-repeat 0 0;
            display: inline-block;
            width: 35px;
            height: 25px;
        }
        .icon-status4 {
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAZCAYAAAC7OJeSAAAB+klEQVRIie3XP2gTYRjH8W9y8Y6aEGikpdWqi7VQMwmioMPp5CC1iiBY/2yCSwchttR211ZKUMFBrUiLu8WCXAYPKYpY20UXrRhTQuSqiYqcvEeTuKRHYjzIP3IO/U3v8/A+8OF94YXX0xbtkIEJ4CwQovnJANNAxAeMqzvUwcnDE7Rvbm+6xDCN1svPIoN6Qv/taYt2fFu88DrkBqQIxN6H+9JewFUIsH4jIR+AqqquYgA4DV63DcXZwDjFB6DrussM6Lqz8/86mQ0MwOPULAML51nIvHEXM5t6wszKI6ycxY3lSRvUdIxmxJhembHrbD5L9OPN5mM0I8bd+P2y/qltJxuHyZNn8fsSVs6qGtLf2Ud/53Gg8M7UC7kXn0IzYoSDexjefQXFq1QMGdh+xq7rPpmpzw/QjBgAb3++49r7cUROVA1pCOb51/mSuhhUDaQhmNGeEVqkljLQxaVLVUHWMWnDNGrGdAd2MdZztQxkZs2KIavmKkBa8h8NbP2QWT5wqOsg/k3+mkBb5BDhYJgX6Zes5df+uccJkvqVIqIP8elH/Jan6HdwDmitSVNIwB+gt7sXSZJK+skvSRLJhNOY/TvwCCGcNlWUvvkTJbUiK/sBDQgWWteFJYad5p8embPXPlmW68L8HWGJV4qsHAPmgNvCEiOVzv4BRX7CWdJWbg4AAAAASUVORK5CYII=") no-repeat 0 0;
            display: inline-block;
            width: 35px;
            height: 25px;
        }
    }
}
.mod-cardDetails {
    padding: 12px;
    .col1 {
        @include span(3 of 12);
    }
    .col2 {
        @include span(3 of 12);
    }
    .col3 {
        @include span(4 of 12 last);
      

    }
}
.icon-info {
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAChklEQVQokY2TXUiTcRSHf/u/s3cfrk2ny4+cU+dYJmGQaYZiESVIdVHhVVgENkkopYREsEFRFzKkCCUioroSuigMFMSZ5rQWXRjpXNurW03Tta907/ZuTrtybKyLzuXvOQ+cA+fwxjM0SCgiLtNckZ+svyYoUmoosUgYW98IsVZm3jNifBxiHM8BbO0083ZkSpKuLuzQjcsbjuWvvX4H/9QnbPoCSMvOhKy2GtlnTmF18O0Pp2GgHgATl9OyMks1fXe/ck4Xzeh7scVxAIDdlQdB5+fA/WYYlEiI0t472I7FQgttt8sBMAQAUbbrxsOLDtrWdS8u8ndLUDH0CmXP+pDVeAKxIAtLayd4hAiVHTojAEKkNZWtGXXVeYy+N3F3xFgWgenPCDtdYC22eP79lh57ms4qhcWFl3kOw8B8ZNWtdT15if8tVdd1RL2+WSJSFxX5J2eSoMagR82CCXXuOSjOn06R/ZMzEGtL1YQvk9KRtd9J0NrRA+/YB/AoCukH9qXIUbcXfEm6gGz+WefS5JkpDUK1CgCwMTufwvgZUsSCbJiEl5wO6ZFDSZASiyCpKAcABEzmFFl29DBY2yJD/FPm/tzmJoCQJMijKHA/l8Et/0oSCU1Dca4R3tGJR8QzPPYw+M2yqmy/+o/xZFA/6AadlxPPintuwjNsdAXnrE+pS0L5Nmu1D+3VNbfQeTlU4OMXhOxLYBdsYK12eEaMYC028PgUSvSdEKgKOHv3/artSMQTv21hiUqrvNHyXrxfq1h5MYiAyYyox4tdiizIaquRe/ECfBPTK07DQH3U47MCCY+xs5K84XibrLZKJygsUPGlEnrTF+BY2yLjHZ3oD5jM/Uj4qr9KJP2QC/V7owAAAABJRU5ErkJggg==") no-repeat 0 0;
    display: inline-block;
    text-indent: -999em;
    width: 15px;
    height: 15px;
}
.error {
    background: #c01126;
    color: #fff;
    display: block;
    padding: 10px;
    border-radius: 4px;
    border: 1px solid $colour--border;
    a {
        color: #fff;
    }
}
.float-right {
    float: right;
}
/*Tooltip*/
/*tooltip styles*/
.cp-tooltip-custom {
    position: absolute;
    background-color: #444;
    background-color: rgba(68, 68, 68, .99);
    border-radius: 2px;
    z-index: 99999;
    text-align: center;
    padding: 10px;
    box-sizing: border-box;
    max-width: 320px;
    color: #eee;
    font-size: 12px
}
.cp-tooltip-custom.hidden-tip {
    opacity: 0
}
.cp-tooltip-custom:after {
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-width: 4px;
    z-index: 999
}
.cp-tooltip-custom.bottom {
    margin-top: 10px;
    margin-left: -5px
}
.cp-tooltip-custom.bottom:after {
    border-color: transparent transparent #444 transparent;
    bottom: 100%;
    left: 10px
}
.cp-tooltip-custom.top {
    margin-top: -10px;
    margin-left: -5px
}
.cp-tooltip-custom.top:after {
    border-color: #444 transparent transparent;
    top: 100%;
    left: 10px
}
.cp-tooltip-custom.left {
    margin-left: -10px
}
.cp-tooltip-custom.left:after {
    border-color: transparent transparent transparent #444;
    top: 50%;
    left: 100%;
    margin-top: -2px
}
.cp-tooltip-custom.right {
    margin-left: 10px
}
.cp-tooltip-custom.right:after {
    border-color: transparent #444 transparent transparent;
    top: 50%;
    right: 100%;
    margin-top: -2px
}
.cp-tooltip-custom h1,
.cp-tooltip-custom h2,
.cp-tooltip-custom h3 {
    color: #eee;
    margin-top: 0
}
.cp-tooltip-custom p {
    color: #eee;
    font-size: 12px
}
.cp-tooltip-custom .align-left {
    text-align: left
}
.cp-tooltip-custom .tooltip-image {
    height: auto;
    width: 100%
}

</style>
<script>
  
//Initialize tooltips
$('body').tip();

// select group radio button and addative class to current list item
$('.mod-list-block li').click(function() {
  $('.mod-list-block li').removeClass('active');
  $(this).addClass('active').find('input:radio').prop('checked', true);
    if ($(".icon-add").hasClass("active")){
    $(".icon-add").removeClass("active");
  }
});

// Nav active state
$(".mod-popup-hor-nav a").on("click",function(){
  $('.mod-popup-hor-nav a').removeClass('active');
  $(this).addClass('active');
});

// Add card
$(".icon-add").on("click", function(){
  $(this).addClass("active");
  if ($(".mod-list-block li").hasClass("active")){
    $(".mod-list-block li").removeClass("active");
  }
});


</script>
</head>
<body>

<div id="popup-holder-window" class="mod-overlay">
    <div class="mod-popup-container mod-popup-center">
        <!-- HEADER SECTION -->
        <header class="mod-popup-header" id="mod-popup-header">
            <div class="mod-row mod-column-double mod-collapsed">
                <div class="mod-column">
                    <h3> Charlotte Travel and Tour Payment System</h3>
                </div>
                <div class="mod-column">
                    <h4>Booking Reference: 614-546-011</h4>
                </div>
                <a class="mod-popup-close" href="javascript:;"></a>
            </div>
        </header>
        <ul class="mod-popup-hor-nav">
            <li><a href="javascript:;">Summary</a></li>
            <li><a class="active" href="javascript:;">Cards</a></li>
            <li><a href="javascript:;">Guest</a></li>
            <li><a href="javascript:;">Charges</a></li>
            <li><a href="javascript:;">Payments</a></li>
            <li><a href="javascript:;">Bills</a></li>
        </ul>
        <div class="mod-popup-content" id="popup-content">

            <div class="mod-popup-inner-content">
                <h4 class="mod-popup-inner-title">Payment Cards</h4>
                <div class="mod-card">
                    <div class="column1 column">
                        <div class="title two-items">
                            <h5>Select (default card)</h5>
                            <h5 class="last">Status</h5>
                        </div>

                        <ul class="mod-list-block">
                            <li>
                                <span class="col1">
                                    <input type="radio" name="paymentoption" value="">
                                    <span class="icon-card icon-visa">Visa</span>
                                </span>
                                <span class="col2">
                                    ending 1111 <br>
                                    Mr R Oliveira
                                </span>
                                <span class="col3">
                                    exp <br>
                                    02/16
                                </span>
                                <span class="col4">
                                    <span class="icon-status  icon-status1" title="CVC available." data-tooltip-title="CVC available." data-tooltip-pos="top" data-tooltip="title"></span>
                                </span>
                            </li>

                            <li>
                                <span class="col1">
                                    <input type="radio" name="paymentoption" value="">
                                    <span class="icon-card icon-amex">Amex</span>
                                </span>
                                <span class="col2">
                                    ending 1478<br>
                                    Mr T Bartholomew
                                </span>
                                <span class="col3">
                                    exp <br>
                                    02/19
                                </span>
                                <span class="col4">
                                    <span class="icon-status icon-status2" data-tooltip="title" data-tooltip-pos="top" data-tooltip-title="CVC viewed 11/10/15" ></span>
                                    <small>Viewed</small>
                                </span>
                            </li>

                            <li>
                                <span class="col1">
                                    <input type="radio" name="paymentoption" value="">
                                    <span class="icon-card icon-visa">Visa</span>
                                </span>
                                <span class="col2">
                                    ending 1121 <br>
                                    Mr J Grimaldi
                                </span>
                                <span class="col3">
                                    exp <br>
                                    02/19
                                </span>
                                <span class="col4">
                                    <span class="icon-status icon-status3" data-tooltip="title" data-tooltip-pos="top" data-tooltip-title="Card declined"></span>
                                </span>
                            </li>

                            <li>
                                <span class="col1">
                                    <input type="radio" name="paymentoption" value="">
                                    <span class="icon-card icon-amex">Amex</span>
                                </span>
                                <span class="col2">
                                    ending 1121 <br>
                                    Mr M Vaiciulis
                                </span>
                                <span class="col3">
                                    exp <br>
                                    02/19
                                </span>
                                <span class="col4">
                                    <span class="icon-status icon-status4"></span>
                                </span>
                            </li>

                        </ul>

                        <button class="icon-add">Add Card</button>
                    </div>
                    <div class="column2 column">
                        <div class="title">
                            <h5>Card Details</h5>
                        </div>
                        <div class="mod-cardDetails">
                            <span class="form-row">
                                <label for="cardNumber">Card Number</label>
                                <input type="text" pattern="[0-9]{13,16} name="cardNumber" placeholder="4111 0111 0111 1221" />
                            </span>
                            <span class="form-row">
                                <label for="cardNumber">Cardholder Name</label>
                                <input type="text" name="cardHolder" placeholder="Mr T Bartholomew">
                            </span>
                            <span class="form-row">
                                <span class="col1">
                                    <label for="month">Exp Month</label>
                                    <select name=month value=''>
                                        Select Month</option>
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
                                </span>
                                <span class="col2">
                                    <label for="year">Exp Year</label>
                                    <select name="year">
                                        <option value='01'>01</option>


                                        <option value='02'>02</option>
                                        <option value='03'>03</option>
                                        <option value='04'>04</option>
                                        <option value='05'>05</option>
                                        <option value='06'>06</option>
                                        <option value='07'>07</option>
                                        <option value='08'>08</option>
                                        <option value='09'>09</option>
                                        <option value='10'>10</option>
                                        <option value='11'>11</option>
                                        <option value='12'>12</option>
                                        <option value='13'>13</option>
                                        <option value='14'>14</option>
                                        <option value='15'>15</option>
                                        <option value='16'>16</option>
                                        <option value='17'>17</option>
                                        <option value='18'>18</option>
                                        <option value='19'>19</option>
                                        <option value='20'>20</option>
                                        <option value='21'>21</option>
                                        <option value='22'>22</option>
                                        <option value='23'>23</option>
                                        <option value='24'>24</option>
                                        <option value='25'>25</option>
                                        <option value='26'>26</option>
                                        <option value='27'>27</option>
                                        <option value='28'>28</option>
                                        <option value='29'>29</option>
                                        <option value='30'>30</option>
                                        <option value='31'>31</option>
                                    </select>
                                </span>
                                <span class="col3">
                                                  
                                                  <label for="cvc">CVC Number</label>
                                    <button disabled="disabled" class="btn">Not Supplied</button>
                                                  
                                    
<button type="button" class="edit btn" data-tooltip-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et tortor et ligula bibendum sollicitudin. Fusce euismod nulla sit amet ante consectetur porta" data-tooltip-pos="top" data-tooltip="title">Edit</button>
                                    <span data-tooltip-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et tortor et ligula bibendum sollicitudin. Fusce euismod nulla sit amet ante consectetur porta" data-tooltip-pos="top" data-tooltip="title"  class="icon-info"></span>
                                </span>
 
                            </span>
                            <span class="form-row">
                                <span class="error">This card has not been accepted. <a href="#">Manage Card Decline</a></span>
                            </span>
                            <span class="form-row">
                                <button class="btn icon-delete">Delete</button>
                                <span class="float-right">
                                    <button class="btn">Preauthorise or Charge</button>
                                    <button class="btn">Save</button>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>
