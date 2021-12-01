<style>


.card-1 {
    width: 400px;
    border-radius: 18px;
    border: none
}

.card-2 {
    border-radius: 20px
}

.card-child {
    border: 3px solid blue;
    border-radius: 16px
}

.circle {
    background-color: #ebdffb;
    height: 50px;
    width: 50px;
    border-radius: 50%;
    display: flex;
    color: #9553ea;
    justify-content: center;
    align-items: center;
    font-size: 20px
}

.circle-2 {
    background-color: #fbebdf;
    height: 50px;
    width: 50px;
    border-radius: 50%;
    display: flex;
    color: #ea9253;
    justify-content: center;
    align-items: center;
    font-size: 20px
}

.circle-3 {
    background-color: blue;
    height: 50px;
    width: 50px;
    border-radius: 50%;
    display: flex;
    color: #fff;
    justify-content: center;
    align-items: center;
    font-size: 20px
}
</style>
<body>
<div class="row">
<div class="card p-3 py-3 mt-3 card-1 text-center">
    <h4>Delivery Address</h4>
    <div class="p-3 card-2">
        <div class="p-3 card-child">
            <div class="d-flex flex-row align-items-center"> <span class="circle"> <i class="fa fa-home"></i> </span>
                <div class="d-flex flex-column ms-3">
                    <h6 class="fw-bold">Home</h6> <span>2112, cottonwoon lane, <br>Ground Floor, NY ,20021</span>
                </div>
            </div>
        </div>
        <div class="p-3 card-child mt-4">
            <div class="d-flex flex-row align-items-center"> <span class="circle-2"> <i class="fa fa-bank"></i> </span>
                <div class="d-flex flex-column ms-3">
                    <h6 class="fw-bold">Office</h6> <span>3432, Awesome Tail lane, <br>First Floor, NY, 43434</span>
                </div>
            </div>
        </div>
        <div class="p-3 card-child mt-4 py-4">
            <div class="d-flex flex-row align-items-center"> <span class="circle-3"> <i class="fa fa-plus"></i> </span>
                <div class="d-flex flex-column ms-3 mt-1">
                    <h6 class="fw-bold text-primary">Add New Address</h6>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br>
</body>