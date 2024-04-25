<style>
  @charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic);
@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css);
html {
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

body {
  background: #f1f2f7;
  font-family: "Open Sans", arial, sans-serif;
  color: darkslategray;
}

body.login {
  background-color: white;
  max-width: 500px;
  margin: 10vh auto;
  padding: 1em;
  height: auto;
}
.banner{
  display: flex;
  align-items: center;
}
.warn {
  color: red;
}

/* header */
header[role="banner"] {
  background: white;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.15);
}
header[role="banner"] h1 {
  margin: 0;
  font-weight: 300;
  padding: 1rem;
}
header[role="banner"] h1:before {
  content: "\f248";
  font-family: FontAwesome;
  padding-right: 0.6em;
  color: red;
}
header[role="banner"] .utilities {
  width: 100%;
  background: slategray;
  color: #ddd;
}
header[role="banner"] .utilities li {
  border-bottom: solid 1px rgba(255, 255, 255, 0.2);
}
header[role="banner"] .utilities li a {
  padding: 0.7em;
  display: block;
}

/* header */
.utilities a:before {
  content: "\f248";
  font-family: FontAwesome;
  padding-right: 0.6em;
}

.logout a:before {
  content: "";
}
.users a:before {
  content: "";
}
.pagination {
    display: flex;
    list-style: none;
    justify-content: center;
}

.page-item {
    padding: 8px 16px;
    margin: 0 4px;
    background-color: #007BFF;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.page-item:hover {
    background-color: #0056b3;
}

/* Styles for active page */
.page-item.active {
    background-color: #0056b3;
}

nav[role="navigation"] {
  background: #2a3542;
  color: #ddd;
  /* icons */
}
nav[role="navigation"] li {
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
nav[role="navigation"] li a {
  color: #ddd;
  text-decoration: none;
  display: block;
  padding: 0.7em;
}
nav[role="navigation"] li a:hover {
  background-color: rgba(255, 255, 255, 0.05);
}
nav[role="navigation"] li a:before {
  content: "\f248";
  font-family: FontAwesome;
  padding-right: 0.6em;
}
nav[role="navigation"] .dashboard a:before {
  content: "";
}
nav[role="navigation"] .write a:before {
  content: "";
}
nav[role="navigation"] .edit a:before {
  content: "";
}
nav[role="navigation"] .comments a:before {
  content: "";
}
nav[role="navigation"] .users a:before {
  content: "";
}

/* current nav item */
.current, .dashboard .dashboard a,
.write .write a,
.edit .edit a,
.comments .comments a,
.users .users a {
  background-color: rgba(255, 255, 255, 0.1);
}

footer[role="contentinfo"] {
  background: slategray;
  color: #ddd;
  font-size: 0.8em;
  text-align: center;
  padding: 0.2em;
}

/* panels */
.panel {
  background-color: white;
  color: darkslategray;
  -webkit-border-radius: 0.3rem;
  -moz-border-radius: 0.3rem;
  -ms-border-radius: 0.3rem;
  border-radius: 0.3rem;
  margin: 1%;
}
.panel > h2, .panel > ul {
  margin: 1rem;
}

/* typography */
a {
  text-decoration: none;
  color: inherit;
}

h2,
h3,
h4 {
  font-weight: 300;
  margin: 0;
}

h2 {
  color: #ff1a1a;
}

b {
  color: lightsalmon;
}

.hint {
  color: lightslategray;
}

/* lists */
ul,
li {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

main li {
  position: relative;
  padding-left: 1.2em;
  margin: 0.5em 0;
}
main li:before {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  left: 0;
  top: 0.3em;
  border-left: solid 10px #dde;
  border-top: solid 5px transparent;
  border-bottom: solid 5px transparent;
}

/* forms */
form input,
form textarea,
form select {
  width: 100%;
  display: block;
  border: solid 1px #dde;
  padding: 0.5em;
}
form input:after,
form textarea:after,
form select:after {
  content: "";
  display: table;
  clear: both;
}
form input[type="checkbox"],
form input[type="radio"] {
  display: inline;
  width: auto;
}
form label,
form legend {
  display: block;
  margin: 1em 0 0.5em;
}
form input[type="submit"] {
  background: #ff1a1a;
  border: none;
  border-bottom: solid 4px #e60000;
  padding: 0.7em 3em;
  margin: 1em 0;
  color: white;
  text-shadow: 0 -1px 0 #e60000;
  font-size: 1.1em;
  font-weight: bold;
  display: inline-block;
  width: auto;
  -webkit-border-radius: 0.5em;
  -moz-border-radius: 0.5em;
  -ms-border-radius: 0.5em;
  border-radius: 0.5em;
}
form input[type="submit"]:hover {
  background: turquoise;
  border: none;
  border-bottom: solid 4px #21ccbb;
  padding: 0.7em 3em;
  margin: 1em 0;
  color: white;
  text-shadow: 0 -1px 0 #21ccbb;
  font-size: 1.1em;
  font-weight: bold;
  display: inline-block;
  width: auto;
  -webkit-border-radius: 0.5em;
  -moz-border-radius: 0.5em;
  -ms-border-radius: 0.5em;
  border-radius: 0.5em;
}

/* feedback */
.error {
  background-color: #ffe9e0;
  border-color: #ffc4ad;
}

label.error {
  padding: 0.2em 0.5em;
}

.feedback {
  background: #fcfae6;
  color: #857a11;
  margin: 1em;
  padding: 0.5em 0.5em 0.5em 2em;
  border: solid 1px khaki;
}
.feedback:before {
  content: "";
  font-family: fontawesome;
  color: #e4d232;
  margin-left: -1.5em;
  margin-right: 0.5em;
}
.feedback li:before {
  border-left-color: #f6f0b9;
}
.feedback.error {
  background: #ffe9e0;
  color: #942a00;
  margin: 1em;
  padding: 0.5em 0.5em 0.5em 2em;
  border: solid 1px lightsalmon;
}
.feedback.error:before {
  content: "";
  font-family: fontawesome;
  color: #ff5714;
  margin-left: -1.5em;
  margin-right: 0.5em;
}
.feedback.error li:before {
  border-left-color: #ffc4ad;
}
.feedback.success {
  background: #98eee6;
  color: #08322e;
  margin: 1em;
  padding: 0.5em 0.5em 0.5em 2em;
  border: solid 1px turquoise;
}
.feedback.success:before {
  content: "";
  font-family: fontawesome;
  color: #1aa093;
  margin-left: -1.5em;
  margin-right: 0.5em;
}
.feedback.success li:before {
  border-left-color: #6ce7db;
}

/* tables */
table {
  border-collapse: collapse;
  width: 96%;
  margin: 2%;
}

th {
  text-align: left;
  font-weight: 400;
  font-size: 13px;
  text-transform: uppercase;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding: 0 10px;
  padding-bottom: 14px;
}

tr:not(:first-child):hover {
  background: rgba(0, 0, 0, 0.1);
}

td {
  line-height: 40px;
  font-weight: 300;
  padding: 0 10px;
}

@media screen and (min-width: 600px) {
  html,
  body {
    height: 100%;
  }

  header[role="banner"] {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 99;
    height: 75px;
  }
  header[role="banner"] .utilities {
    position: absolute;
    top: 0;
    right: 0;
    background: transparent;
    color: darkslategray;
    width: auto;
  }
  header[role="banner"] .utilities li {
    display: inline-block;
  }
  header[role="banner"] .utilities li a {
    padding: 0.5em 1em;
  }

  nav[role="navigation"] {
    position: fixed;
    width: 200px;
    top: 75px;
    bottom: 0px;
    left: 0px;
  }

  main[role="main"] {
    margin: 100px 0 40px 200px;
  }
  main[role="main"]:after {
    content: "";
    display: table;
    clear: both;
  }

  .panel {
    margin: 2% 0 0 2%;
    float: left;
    width: 96%;
  }
  .panel:after {
    content: "";
    display: table;
    clear: both;
  }

  .box, .onethird, .twothirds {
    padding: 1rem;
  }

  .onethird {
    width: 33.333%;
    float: left;
  }

  .twothirds {
    width: 66%;
    float: left;
  }

  footer[role="contentinfo"] {
    clear: both;
    margin-left: 200px;
  }
}
@media screen and (min-width: 900px) {
  footer[role="contentinfo"] {
    position: fixed;
    width: 100%;
    bottom: 0;
    left: 0px;
    margin: 0;
  }

  .panel {
    width: 47%;
    clear: none;
  }
  .panel.important {
    width: 96%;
  }
  .panel.secondary {
    width: 23%;
  }
}
.col-md-12{
            width: 868px;
            margin: 20px auto;
        }
        .text-right{
        text-align: right;
    }
    .btn-primary{
        width: 200px;
        color: #ffffff;
    text-decoration: none;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: none;
    background-color: #01c4c4;
    display: inline-block;
    padding: 7px 20px;
    margin-bottom: 0;
    font-size: 12px;
    text-transform: uppercase;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #ff0000;
    color: #ffffff;
}
    .btn-default {
        width: 200px;
    color: #ffffff;
    text-decoration: none;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: none;
    background-color: #01c4c4;
    display: inline-block;
    padding: 7px 20px;
    margin-bottom: 0;
    font-size: 12px;
    text-transform: uppercase;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    }
        .col-md-12{
            padding-left: 10px;
    padding-right: 10px;
        }
    @media print {
    body * {
        visibility: hidden;
    }
    
    .payment-order, .payment-order * {
        visibility: visible;
    }    
}
        .payment-order {
    position: relative;
    line-height: 30px;
    padding: 40px;
    margin-bottom: 15px;
    border: 1px solid #dddddd;
    margin: 40px auto;
    padding-left: 10px;
    padding-right: 10px;
}
.payment-order h3{
    margin-top: 20px;
}
.payment-order p{
    margin: 0 10px;
}
.payment-order h1{
   
    color: #373737;
    font-size: 19px;
    font-weight: bold;
    margin-bottom: 15px;
    margin-top: 0;
    text-transform: uppercase;

}
.table {
    margin-bottom: 20px;
    border-collapse: collapse;
    text-indent: initial;
    border-spacing: 2px;
    border-color: gray;
    display: table;
}
.payment-order table thead {
    background-color: #eaeaea;
    text-transform: uppercase;
    vertical-align: middle;
}
.text-right {
    text-align: right;
}
 .payment-order .label-payment {
    text-transform: uppercase;
}
 .payment-order .total-payment {
    color: #ff0000;
    font-size: 18px;
}
.table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
.table>thead>tr>th {
  text-align: center;
    vertical-align: bottom;
    border-bottom: 2px solid #ddd;
}
.table>caption+thead>tr:first-child>td, .table>caption+thead>tr:first-child>th, .table>colgroup+thead>tr:first-child>td, .table>colgroup+thead>tr:first-child>th, .table>thead:first-child>tr:first-child>td, .table>thead:first-child>tr:first-child>th {
    border-top: 0;
    text-align: center;
}
.table > thead > tr > th {
    vertical-align: middle;
}
.table > tfoot > tr > td{
    vertical-align: middle;
    text-align: center;
}
.table>tbody>tr>td{
    vertical-align: middle;
}
.table>tfoot>tr>td{
    padding: 2px 0px;
    line-height: 1.42857143;
}
.table>tbody>tr>td{
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    text-align: center;
}
 .payment-order .print-order a {
    color: #ffffff;
    background-color: #ff0000;
    line-height: 20px;
    padding: 5px;
    position: absolute;
    text-decoration: none;
    left: 0;
    top: 0;
}
.col-md-12{
            width: 868px;
            margin: 20px auto;
        }
        .text-right{
        text-align: right;
    }
    .btn-primary{
        width: 200px;
        color: #ffffff;
    text-decoration: none;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: none;
    background-color: #01c4c4;
    display: inline-block;
    padding: 7px 20px;
    margin-bottom: 0;
    font-size: 12px;
    text-transform: uppercase;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #ff0000;
    color: #ffffff;
}
    .btn-default {
        width: 200px;
    color: #ffffff;
    text-decoration: none;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: none;
    background-color: #01c4c4;
    display: inline-block;
    padding: 7px 20px;
    margin-bottom: 0;
    font-size: 12px;
    text-transform: uppercase;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    }
        .col-md-12{
            padding-left: 10px;
    padding-right: 10px;
        }
    @media print {
    body * {
        visibility: hidden;
    }
    
    .payment-order, .payment-order * {
        visibility: visible;
    }    
}
        .payment-order {
    position: relative;
    line-height: 30px;
    padding: 40px;
    margin-bottom: 15px;
    border: 1px solid #dddddd;
    margin: 40px auto;
    padding-left: 10px;
    padding-right: 10px;
}
.payment-order h3{
    margin-top: 20px;
}
.payment-order p{
    margin: 0 10px;
}
.payment-order h1{
   
    color: #373737;
    font-size: 19px;
    font-weight: bold;
    margin-bottom: 15px;
    margin-top: 0;
    text-transform: uppercase;

}
.table {
    margin-bottom: 20px;
    border-collapse: collapse;
    text-indent: initial;
    border-spacing: 2px;
    border-color: gray;
    display: table;
}
.payment-order table thead {
    background-color: #eaeaea;
    text-transform: uppercase;
    vertical-align: middle;
}
.text-right {
    text-align: right;
}
 .payment-order .label-payment {
    text-transform: uppercase;
}
 .payment-order .total-payment {
    color: #ff0000;
    font-size: 18px;
}
.table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
.table>thead>tr>th {
    vertical-align: bottom;
    border-bottom: 2px solid #ddd;
}
.table>caption+thead>tr:first-child>td, .table>caption+thead>tr:first-child>th, .table>colgroup+thead>tr:first-child>td, .table>colgroup+thead>tr:first-child>th, .table>thead:first-child>tr:first-child>td, .table>thead:first-child>tr:first-child>th {
    border-top: 0;
}
.table > thead > tr > th {
    vertical-align: middle;
}
.table > tfoot > tr > td{
    vertical-align: middle;
}
.table>tbody>tr>td{
    vertical-align: middle;
}
.table>tfoot>tr>td{
    padding: 2px 0px;
    line-height: 1.42857143;
}
.table>tbody>tr>td{
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    text-align: center;
}
 .payment-order .print-order a {
    color: #ffffff;
    background-color: #ff0000;
    line-height: 20px;
    padding: 5px;
    position: absolute;
    text-decoration: none;
    left: 0;
    top: 0;
}
</style>

 