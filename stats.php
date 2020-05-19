<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>

<script type="text/javascript" src="assets/js/chart/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/chart/Chart.min.js"></script>

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Content Head -->
    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Statistics</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>


                <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                    <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                    <span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="flaticon2-search-1"></i></span>
										</span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">


                <a href="index.php" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
                    Add New
                </a>

            </div>
        </div>
    </div>

    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


        <!--Begin::Row-->
        <div class="row">
            <div class="col-lg-12">
            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Complexities of the Previously Uploaded Files
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <!--begin::Form-->
                    <div class="form-group row">

                        <div class="col-lg-12 col-md-9 col-sm-12">





                            <div id="chart-container">
                                <canvas id="graphCanvas"></canvas>
                            </div>









                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
    <!-- end:: Content -->
</div>

<script>
    $(document).ready(function () {
        showGraph();
    });


    function showGraph()
    {
        {
            $.post("include/data.php",
                function (data)
                {
                    console.log(data);
                    var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].statFilename);
                        marks.push(data[i].statComplexity);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Complexities of the Uploaded Files',
                                backgroundColor: '#007bff',
                                borderColor: '#007bff',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
        }
    }
</script>

<?php include 'include/footer.php'; ?>
