using System;
using System.Collections.Generic;
using System.Linq;
using System.Security.Cryptography;
using System.Text;

namespace SimpleClient
{
    class Utilities
    {
        public static string GA() // GetAv
        {
            GetAV getav = new GetAV();
            string AV;

            AV = getav.Antivirus();
            if (AV == "")
            {
                AV = getav.Antivirus2();

            }
            return AV;

        }

        public static string CalculateMD5Hash(byte[] input)
        {
            MD5 md5 = System.Security.Cryptography.MD5.Create();
            byte[] hash = md5.ComputeHash(input);
            StringBuilder sb = new StringBuilder();
            for (int i = 0; i < hash.Length; i++)
            {
                sb.Append(hash[i].ToString("X2"));
            }
            return sb.ToString();
        }
    }
}
