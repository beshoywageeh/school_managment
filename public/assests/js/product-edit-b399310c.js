import{$ as r}from"./app-3962e19f.js";/* empty css            */new r("#dropzone-product-edit",{url:location.href,maxFiles:5,maxFilesize:5,addRemoveLinks:!0,init:function(){const e=[{id:1,name:"Product 1",size:23986,url:"/images/product1.png"},{id:2,name:"Product 2",size:33293,url:"/images/product2.png"},{id:3,name:"Product 3",size:32377,url:"/images/product3.png"},{id:4,name:"Product 4",size:36318,url:"/images/product7.png"},{id:5,name:"Product 5",size:17526,url:"/images/product8.png"}];e.forEach(i=>{const{id:s,name:t,size:o,url:n}=i;this.files.push(i),this.displayExistingFile({id:s,name:t,size:o},n)}),this.options.maxFiles=this.options.maxFiles-e.length,this.on("removedfile",i=>{this.files=this.files.filter(s=>s.id!==i.id),this.options.maxFiles=e.length-this.files.length})}});