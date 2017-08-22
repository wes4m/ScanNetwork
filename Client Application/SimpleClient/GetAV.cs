using Microsoft.VisualBasic.CompilerServices;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Management;
using System.Text;

namespace SimpleClient
{
  public  class GetAV
    {
        private string wmipath;
 

 


        public string Antivirus()
        {
            string str="";
            string machineName = Environment.MachineName;
            this.wmipath = @"\\" + machineName + @"\root\SecurityCenter";
            ManagementObjectCollection objects = new ManagementObjectSearcher(this.wmipath, "SELECT * FROM AntivirusProduct").Get();
            foreach (ManagementObject obj2 in objects)
            {
                try
                {
                    str = Conversions.ToString(Operators.AddObject(str, Operators.ConcatenateObject(Operators.AddObject(obj2["displayName"], " - "), "")));
                }
                catch  {}
            }
            return str;
        }
        public string Antivirus2()
        {
            string str="";
            string machineName = Environment.MachineName;
            this.wmipath = @"\\" + machineName + @"\root\SecurityCenter2";
            ManagementObjectCollection objects = new ManagementObjectSearcher(this.wmipath, "SELECT * FROM AntivirusProduct").Get();
            foreach (ManagementObject obj2 in objects)
            {
                try
                {
                    str = Convert.ToString(Operators.AddObject(str, Operators.ConcatenateObject(Operators.AddObject(obj2["displayName"], " - "), "")));
                }
                catch { }
            }
            return str;
        }


 

 

    }
}
