using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace SimpleClient
{
    public class data
    {
        public string av { get; set; }
    }

    public class FileData
    {
        public string FileLink{ get; set; }
        public string HASH { get; set; }
    }

    public class ScanData
    {
        public string Antivirus { get; set; }

        public string LastUpdate { get; set; }

        public string Result { get; set; }
        public string HASH { get; set; }
    }

}
