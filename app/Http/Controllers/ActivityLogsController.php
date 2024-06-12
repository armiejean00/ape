<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityLogsController extends Controller
{
    public function index() {
    return view('activitylogs');
}

public function showAct(){
    $acts = <<<HTML
        <tbody>
            <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">2024-06-03 08:30:45</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">User</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">user@example.com</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">Logged in to the system</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">192.168.1.100</td>

            </tr>
            <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">2024-06-03 08:30:45</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">User</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">user@example.com</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">Logged out to the system</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">192.168.1.100</td>

            </tr>
            <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">2024-06-03 08:30:45</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">User</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">user@example.com</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">Booked Desk no. 7</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">192.168.1.100</td>
            </tr>
            <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">2024-06-03 08:30:45</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">User</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">user@example.com</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">Logged in to the system</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">192.168.1.100</td>

            </tr>
            <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">2024-06-03 08:30:45</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">User</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">user@example.com</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">Logged out to the system</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">192.168.1.100</td>

            </tr>
            <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">2024-06-03 08:30:45</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">User</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">user@example.com</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">Booked Desk no. 11</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">192.168.1.100</td>
            </tr>    <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">2024-06-03 08:30:45</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">User</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">user@example.com</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">Logged in to the system</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">192.168.1.100</td>

            </tr>
            <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">2024-06-03 08:30:45</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">User</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">user@example.com</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">Logged out to the system</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">192.168.1.100</td>

            </tr>
            <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">2024-06-03 08:30:45</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">User</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">user@example.com</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">Booked Desk no. 9</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">192.168.1.100</td>
            </tr>    <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">2024-06-03 08:30:45</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">User</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">user@example.com</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">Logged in to the system</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">192.168.1.100</td>

            </tr>
            <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">2024-06-03 08:30:45</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">User</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">user@example.com</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">Logged out to the system</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">192.168.1.100</td>

            </tr>
            <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">2024-06-03 08:30:45</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">User</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">user@example.com</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">Booked Desk no. 24</td>
<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" style="font-size: 16px;">192.168.1.100</td>
            </tr>

        </tbody>
HTML;

    return $acts;
}

public function showActlogs()
    {
        $cssPaths = [

        ];  
        
        return view('activitylogs', ['cssPaths' => $cssPaths, 'activityLogsTable' => $this->showAct()]);
    }


}
