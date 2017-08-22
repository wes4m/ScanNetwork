using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace SimpleClient
{
    class Scanners
    {


        public static string[] AvastScan(string FileForScanPath)
        {
            String AvastPath = @"C:\Program Files\AVAST Software\Avast\ashCmd.exe";
            String AvastDir = @"C:\Program Files\AVAST Software\Avast";
            String AArguments = Convert.ToChar(34) + FileForScanPath + Convert.ToChar(34) + " --dontpanic --stopclean --console";
            return AVEngines.AvastEngine(AvastPath, AvastDir, AArguments);

        }


        public static string[] AviraScan(string FileForScanPath)
        {
            String AviraPath = @"C:\vdb\scancl-1.9.161.2\scancl.exe";
            String AviraDir = @"C:\vdb\scancl-1.9.161.2\";
            String AArguments = Convert.ToChar(34) + FileForScanPath + Convert.ToChar(34) + " --showall";
            return  AVEngines.AviraEngine(AviraPath, AviraDir, AArguments);

        }


        public static string[] ESETScan(string FileForScanPath)
        {
            String ESETPath = @"C:\Program Files\ESET\ESET NOD32 Antivirus\ecls.exe";
            String ESETDir = @"C:\Program Files\ESET\ESET NOD32 Antivirus\";
            String EArguments = "/files " + Convert.ToChar(34) + FileForScanPath + Convert.ToChar(34) + " /clean-mode=none";
            return AVEngines.ESETEngine(ESETPath, ESETDir, EArguments);
        }

        public static string[] IKARUSScan(string FileForScanPath)
        {
            String IKARUSPath = @"C:\T3scan\T3Scan.exe";
            String IKARUSDir = @"C:\T3scan\";
            String IArguments = Convert.ToChar(34) + FileForScanPath + Convert.ToChar(34);
            return AVEngines.IKARUSEngine(IKARUSPath, IKARUSDir, IArguments);

        }
       
    }
}
