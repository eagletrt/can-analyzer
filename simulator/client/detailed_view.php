<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
    <head>
        <?php include 'include/head.php'; ?>
        <style>
            table, thead, tr, th, td { border: none; }
            .table-responsive, table { width: 100%; }
            th { background-color: #1E274B; color: #D8DBE2; width: 14.28%; }
            td { text-align: center; }
        </style>
    </head>

    <body>
        <!-- Main cointainer -->
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

            <!-- Top bar -->
            <header class="mdl-layout__header color-eagle-blue">
                <div class="mdl-layout__header-row">
                </div>
            </header>

            <?php include 'include/header.php'; ?>

            <!-- Main tag (page content) -->
            <main class="mdl-layout__content color-eagle-gray">
                <div class="mdl-grid" style="padding: 25px;">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Priority
                                    </th>
                                    <th>
                                        Device
                                    </th>
                                    <th>
                                        Sent To
                                    </th>
                                    <th>
                                        Receive From
                                    </th>
                                    <th>
                                        Message
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td>
                                    <?php $id ?>
                                </td>
                                <td>
                                    <?php $name ?>
                                </td>
                                <td>
                                    <?php $priority ?>
                                </td>
                                <td>
                                    <?php $device ?>
                                </td>
                                <td>
                                    <?php $sent_to ?>
                                </td>
                                <td>
                                    <?php $rec_from ?>
                                </td>
                                <td>
                                    <?php $msg ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </main>
        </div>

        <!-- <script src="https://code.getmdl.io/1.3.0/material.min.js"></script> -->
        <script src="MDL/material.min.js"></script>
    </body>
</html>
