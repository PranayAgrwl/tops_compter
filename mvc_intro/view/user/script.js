function getProductData()
{
    $.ajax
    (
        {
            type:"GET",
            url:"https://localhost/tops_computer/mvc_intro/user/allproduct",

            success:function(data)
            {
                //console.log(data);
                let ProductData = JSON.parse(data);
                productView(ProductData);
                //console.log(ProductData)
            },
            error:function(error)
            {
                console.log(error);
            }
        }
    )
}

function productView(ProductData)
{
    str="";
    for(index of ProductData)
    {
        console.log(index)
        str+=`
        <div class="col-md-3" style="margin-left:20px;">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="https://localhost/tops_computer/mvc_intro/uploads/products${index['pimage']}" style="width:200px;height:200px" >

                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        `;

    }
    console.log(str);
    document.getElementById("products").innerHTML=str;
}
window.onload = getProductData();