<div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Statement of account</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Datetime</th>
                                        <th>Amount</th>
                                        <th>Type</th>
                                        <th>Details</th>
                                        <th>Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($user_data['transaction']) 
                                    {
                                        $ac_balance = $user_data['user']->user_balance;
                                        foreach ($user_data['transaction'] as $value) 
                                        {
                                            if ($value->method == 1) 
                                            {
                                                $detail = "Deposit";
                                            }
                                            elseif($value->method == 2)
                                            {
                                                $detail = "Withdraw";
                                            }    
                                            elseif ($value->method == 3) 
                                            {
                                                if ($value->type == "Credit") 
                                                {
                                                    $detail = "Transfer from<br/>".$value->user_email;
                                                }
                                                else
                                                {
                                                    $detail = "Transfer to<br/>".$value->t_u_email;
                                                }
                                            }
                                            $newDateTime = date('d-m-Y h:i A', strtotime($value->tr_date));
                                        ?>
                                            <tr>
                                                <td><?= $newDateTime; ?></td>
                                                <td><?= $value->amount; ?></td>
                                                <td><?= $value->type; ?></td>
                                                <td><?= $detail; ?></td>
                                                <td><?= $ac_balance; ?></td>
                                            </tr>
                                        <?php
                                            if ($value->type == "Credit") 
                                            {
                                                $ac_balance = $ac_balance - $value->amount;
                                            }
                                            else
                                            {
                                                $ac_balance = $ac_balance + $value->amount;
                                            }
                                        }
                                    }
                                    else
                                    {
                                        echo "No data available in table";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>